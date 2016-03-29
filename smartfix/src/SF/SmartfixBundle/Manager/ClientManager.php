<?php
    namespace SF\SmartfixBundle\Manager;
    use SF\SmartfixBundle\Entity\Client;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\Validator\Constraints\Email;
    use SF\SmartfixBundle\Entity\ClientDevice;

 class ClientManager {

    protected $em;
    protected $container;
    protected $data = array(
        'status' => FALSE,
        'message' => '',
        'data' => array(),
    );
//    protected $router;
//    protected $UserRepository;
     /**
     * Construct
     *
     * @param type $em
     * @param type $container
     * @param type $router
     */
    public function __construct($em, $container)
    {
        $this->em = $em;
        $this->container = $container;
//        $this->router = $router;
//        $this->UserRepository = $this->em->getRepository("StudentBundle:User");
    }
    /**
     * Create encode password
     *
     * @param \SM\UserBundle\Entity\User $entity
     * @param string                     $password
     *
     * @return type
     */
    private function createEncodePassword($entity, $password)
    {
        $factory = $this->container->get('security.encoder_factory');
        $encoder = $factory->getEncoder($entity);
        
        $passwordEncoded = $encoder->encodePassword($password, 'smartfix.local@smartfix.local');
        
        return $passwordEncoded;
    }
    function isEmail ($email){
        $emailConstraint = new Email();
        $emailConstraint->message = 'Invalid email address';
        $errorList = $this->container->get('validator')->validateValue($email, $emailConstraint);
        if (count($errorList) == 0) {
            $data = array('success' => true, 'error' => 'successali');
        } else {
            $data = array('success' => false, 'error' => $errorList[0]->getMessage());
        }
        return $data;
    }
    
    /**
     * Check is email exist
     *
     * @param string $email
     *
     * @return boolean
     */
    public function isEmailExist($email)
    {
        $em = $this->em;
        $repoClient = $em->getRepository('SmartfixBundle:Client');
        $client = $repoClient->findOneBy(array('email' => $email));
        if ($client) {
            return true;
        }
        return false;
    }
    /**
     * Return login token, this function build login token and return
     *
     * @param type $clientname
     * @param type $clientID
     * @param type $gid
     * @param type $role
     *
     * @return type
     */
    public function encodeToken($clientEmail, $clientID)
    {
        $loginToken = base64_encode(implode("[___]", array(
            $clientEmail,
            $clientID,
        )));

        return $loginToken;
    }
    
    /**
     * Decode login token
     *
     * @param string $loginToken
     *
     * @return type
     */
    private function decodeToken($loginToken)
    {
        $tokenData = base64_decode($loginToken);
        $dataArr = explode('[___]', $tokenData);

        return $dataArr;
    }
    /**
     * Process signup data
     *
     * @param \SM\UserBundle\Entity\User    $entity
     * @param Array                         $request
     *
     * @return array
     */
    public function processSignup($entity, $dataRequest)
    {
        $data = $this->data;
        $em = $this->em;
        $isEmail = $this->isEmail($entity->getEmail());
        $emailExist = $this->isEmailExist($entity->getEmail());
        if(!$emailExist){
            if($isEmail['success'] == true){
                $password = $this->createEncodePassword($entity, $entity->getPassword());
                $entity->setPassword($password);
                $em->persist($entity);
                $em->flush();       

                $data['status'] = TRUE;
                $data['message'] = 'Register Successfully';
                $data['data'] = array(
                    'login_token' => $this->encodeToken(
                        $entity->getEmail(), $entity->getId()),
                    'lastname' => $entity->getLastName(),
                    'firstname' => $entity->getFirstName(),
                    'new_device' => TRUE,
                );
            }
        }

        return $data;
    }
    /**
     * Process login for user
     *
     * @param type $clientname
     * @param type $password
     * @param type $deviceToken
     *
     * @return Array
     */
    public function clientLogin($clientemail, $password, $deviceToken)
    {
        $data = $this->data;
        $em = $this->em;
        $repoClient = $em->getRepository('SmartfixBundle:Client');
        $client = $repoClient->findOneBy(array('email' => $clientemail));
        if ($client === null) {
            $data['message'] = 'Email not exist';
        } else {

            $loginPasswordEncode = $this->createEncodePassword($client, $password);
            if ($loginPasswordEncode == $client->getPassword()) {
                
                $repoUserDevice = $em->getRepository('SmartfixBundle:ClientDevice');
                $loginOnNewDevice = $repoUserDevice->isLoginOnNewDevice($client, $deviceID='qwqp4j58d', $operationSystem = 'IOS', $deviceToken);
                
                $data['status'] = TRUE;
                $data['message'] = 'Login Successfully';

                $data['data'] = array(
                    'login_token' => $this->encodeToken(
                        $client->getEmail(), $client->getId()),
                    'lastname' => $client->getLastName(),
                    'firstname' => $client->getFirstName(),
                    'new_device' => $loginOnNewDevice,
                );
            } else {
                $data['message'] = 'Email or password incorrect';
            }
        }

        return $data;
    }
    
    /**
     * Process forgot password
     *
     * @param type $email
     * @param type $deviceID
     *
     * @return type
     */
    public function processForgotPassword($email, $deviceID)
    {
        $data = $this->data;

        //process forgot password
        $em = $this->em;
        $repoClient = $em->getRepository('SmartfixBundle:Client');
        $client = $repoClient->findOneBy(array('email' => $email));

        if ($client) {

            // Random 100000 -> 999999 for new Password
            $newPassword = rand(100000, 999999); //uniqid();
            // Send Mail
//            $this->sendPasswordMail($email, $newPassword);
            $newPasswordEncoded = $this->createEncodePassword($client, $newPassword);
            $client->setPassword($newPasswordEncoded);

            $em->persist($client);

            try {
                $em->flush();
            } catch (Doctrine\DBAL\DBALException $ex) {
                $data['message'] = $ex->getMessage();
            }

            $data['status'] = TRUE;
            $data['message'] = 'New password is send to your email';
        } else {
            $data['message'] = 'Email is not exist!';
        }

        return $data;
    }
    /**
     * Uppload Avatar client
     *
     * @param \SF\SmartfixBundle\Entity\Client    $entity
     * @param Array                         $request
     *
     * @return array
     */
    public function uploadAvatar($entity, $dataRequest)
    {
        $data = $this->data;
        $em = $this->em;
        $entity->uploadImage();
        $em->persist($entity);
        $em->flush();       
        
        $data = array();
        $data['status'] = TRUE;
        $data['message'] = 'Upload Successfully';
        $data['data'] = array(
            'avatar' => $entity->getAvatar(),
            'path' => $_SERVER['HTTP_HOST']. '/uploads/images/',
        );

        return $data;
    }
 }
