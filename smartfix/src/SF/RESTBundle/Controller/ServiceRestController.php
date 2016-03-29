<?php

namespace SF\RESTBundle\Controller;

use SF\SmartfixBundle\Entity\Service;
use SF\SmartfixBundle\Form\ServiceType;
//
//use FOS\RestBundle\Controller\Annotations\View;
//use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
//use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
//use FOS\RestBundle\Controller\FOSRestController;
//
//use Nelmio\ApiDocBundle\Annotation\ApiDoc;
//use Symfony\Component\HttpFoundation\Request;
//use FOS\RestBundle\Controller\Annotations\Post;
//
//
//use FOS\RestBundle\Request\ParamFetcher;
use Symfony\Component\HttpFoundation\Request;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\Post;
use FOS\RestBundle\View\View;
use FOS\RestBundle\Util\Codes;
use FOS\RestBundle\Controller\Annotations\RequestParam;
use FOS\RestBundle\Request\ParamFetcher;


class ServiceRestController extends FOSRestController
{

    public function indexAction()
    {   
        
        return true;
    }
    
    /**
     * Check user info and save to database, enctype=multipart/form-data.
     * @param Request $request Request
     * 
     * @ApiDoc(
     *   resource = true,
     *   description = "Check user info and save to database, enctype=multipart/form-data.",
     *   parameters={
     *     {"name"="serviceName", "dataType"="string", "required"=true, "description"="User avatar"},
     *     {"name"="avatar", "dataType"="file", "required"=true, "description"="User avatar"},
     *     {"name"="status", "dataType"="integer", "required"=true, "description"="User avatar"}
     *   },
     *   statusCodes = {
     *      200 = {
     *          "Returned when successful",
     *          "- Status true : Get data",
     *          "- Status false : Show message",
     *      },
     *      400 = "Returned when call has errors",
     *      401 = "Returned when Unauthorized, error username/password HTTP Authentication",
     *   }
     * )
     *
     * @return View
     */
    public function createServiceAction(Request $request){
        
        $entity = new Service();
        $dataRequest = $request->request->all();   
        $form = $this->createForm(new ServiceType(), $entity); 
        $form->handleRequest($request);        
        $entity->setDateCreate(new \DateTime());
        $manager = $this->get('sf_smartfix.service.manager');
        if ($request->getMethod() == 'POST') {          
                        
            $data = $manager->createService($entity, $dataRequest);  
        }
        return $data;
    }
    /**
     * Return List Service.
     *
     *
     * @ApiDoc(
     *   resource = true,
     *   tags={"Develop Database",},
     *   description = "Return List Service",
     *   statusCodes = {
     *      200 = {
     *          "Returned when successful",
     *          "- Status true : ",
     *          "- Status false : Show message",
     *      },
     *      400 = "Returned when call has errors",
     *      401 = "Returned when Unauthorized, error username/password HTTP Authentication",
     *   },
     * )
     *
     * @return View
     */
    public function getListServiceAction()
    {
        $manager = $this->get('sf_smartfix.service.manager');
        $data = $manager->listService();
        $data['path'] = $_SERVER['HTTP_HOST']. '/uploads/images/';
        return $data;
    }
    
}
