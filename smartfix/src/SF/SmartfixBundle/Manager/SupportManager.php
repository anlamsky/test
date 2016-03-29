<?php
    namespace SF\SmartfixBundle\Manager;
    use SF\SmartfixBundle\Entity\Support;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\Validator\Constraints\Email;

 class SupportManager {

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
     * Process Support data
     *
     * @param \SF\SmartfixBundle\Entity\Support    $entity
     * @param Array                         $request
     *
     * @return array
     */
    public function createSupport($entity, $dataRequest)
    {
        $data = $this->data;
        $em = $this->em;
        
        $em->persist($entity);
        $em->flush();    
        
        $myData = $this->em->getRepository('SmartfixBundle:Service');
        $serviceName = $myData->find($entity->getServiceId());
                
        $data['status'] = TRUE;
        $data['message'] = 'Craete Service Successfully';
        $data['data'] = array(
            'login_token' => $this->encodeToken(
                $entity->getServiceId(), $entity->getPostCost(), $entity->getId()),
            'serviceName' => $serviceName->getServiceName(),
            'date' => $entity->getDate()->format('d/m/Y'),
            'number' => $entity->getNumber(),
            'street' => $entity->getStreetName(),
            'post_cost' => $entity->getPostCost(),
            'city' => $entity->getCity(),
            'id' => $entity->getId(),
        );

        return $data;
    }
    /**
     * Process Support data
     *
     * @param \SF\SmartfixBundle\Entity\Support    $entity
     * @param Array  $request
     *
     * @return array
     */
    public function updateSupport($entity, $dataRequest)
    {
        
        $data = $this->data;
        $em = $this->em;
        $support = $this->em->getRepository('SmartfixBundle:Support')
                    ->find($dataRequest['id']);
        $support->setCcNumber($dataRequest['ccNumber']);
        $date = date('Y-m-d', strtotime($dataRequest['exp']));
        $support->setExp(new \DateTime($date));
        $support->setNum($dataRequest['num']);
        $em->persist($support);
        $em->flush();
        
        $myData = $this->em->getRepository('SmartfixBundle:Service');
        $serviceName = $myData->find($support->getServiceId());
        
        $data['status'] = TRUE;
        $data['message'] = 'Craete Service Successfully';
        $data['data'] = array(
            'login_token' => $this->encodeToken(
                $support->getServiceId(), $support->getPostCost(), $support->getId()),
            'serviceName' => $serviceName->getServiceName(),
            'date' => $support->getDate()->format('d/m/Y'),
            'number' => $support->getNumber(),
            'street' => $support->getStreetName(),
            'post_cost' => $support->getPostCost(),
            'city' => $support->getCity(),
            'id' => $support->getId(),
        );
        
        return $data;
        
    }
    /**
     * Process Support data
     *
     * @param \SF\SmartfixBundle\Entity\Support    $entity
     * @param Array  $request
     *
     * @return array
     */
    public function listSupport()
    {
        
        $data = $this->data;
        $em = $this->em;
        $support = $this->em->getRepository('SmartfixBundle:Support')
                    ->getSupportLeftJoin(); 
        
        $data['status'] = TRUE;
        $data['message'] = 'Craete Service Successfully';
        $data['data'] = $support;
        $data['count'] = count($support);
        
        return $data;
        
    }
 }
