<?php
    namespace SF\SmartfixBundle\Manager;
    use SF\SmartfixBundle\Entity\Review;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\Validator\Constraints\Email;

 class ReviewManager {

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
     * Return support token, this function build support token and return
     *
     * @param type $serviceId
     * @param type $serviceId
     * @param type $ccNumber
     *
     * @return type
     */
    public function encodeToken($serviceId, $serviceId, $id)
    {
        $loginToken = base64_encode(implode("[___]", array(
            $serviceId,
            $serviceId,
            $id,
        )));

        return $loginToken;
    }
    
    /**
     * Decode support token
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
     * Process Review data
     *
     * @param \SF\SmartfixBundle\Entity\Review    $entity
     * @param Array                         $request
     *
     * @return array
     */
    public function createReview($entity, $dataRequest)
    {
        $data = $this->data;
        $em = $this->em;        
        $em->persist($entity);
        $em->flush();    
                
        $data['status'] = TRUE;
        $data['message'] = 'Craete Review Successfully';
        $data['data'] = array(
            'review_token' => $this->encodeToken(
                $entity->getAssId(), $entity->getClientId(), $entity->getId()),
            'id' => $entity->getId(),
        );
        return $data;
    }
    
    
 }
