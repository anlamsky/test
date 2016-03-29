<?php
    namespace SF\SmartfixBundle\Manager;
    use SF\SmartfixBundle\Entity\Service;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\Validator\Constraints\Email;

 class ServiceManager {

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
     * Return login token, this function build login token and return
     *
     * @param type $ServiceName
     * @param type $status
     *
     * @return type
     */
    public function encodeToken($serviceName, $status)
    {
        $loginToken = base64_encode(implode("[___]", array(
            $serviceName,
            $status,
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
     * @param \SF\SmartfixBundle\Entity\Service    $entity
     * @param Array                         $request
     *
     * @return array
     */
    public function createService($entity, $dataRequest)
    {
        $data = $this->data;
        $em = $this->em;
        $entity->uploadImage();
        $em->persist($entity);
        $em->flush();       

        $data['status'] = TRUE;
        $data['message'] = 'Craete Service Successfully';
        $data['data'] = array(
            'login_token' => $this->encodeToken(
                $entity->getServiceName(), $entity->getStatus()),
            'serviceName' => $entity->getServiceName(),
            'avatar' => $entity->getAvatar(),
        );

        return $data;
    }
    /**
     * Get Information User
     *
     * @param type $loginToken
     *
     * @return string
     */
    public function listService()
    {
        $data = $this->data;

        $data['status'] = TRUE;
        $userRepo = $this->em->getRepository('SmartfixBundle:Service');

        $entity = $userRepo->findAll();

        $data['data'] = $entity;
        

        return $data;
    }
 }
