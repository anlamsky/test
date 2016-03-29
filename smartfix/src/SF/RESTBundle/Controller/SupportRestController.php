<?php

namespace SF\RESTBundle\Controller;

use SF\SmartfixBundle\Entity\Support;
use SF\SmartfixBundle\Form\SupportType;

use Symfony\Component\HttpFoundation\Request;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\Post;
use FOS\RestBundle\View\View;
use FOS\RestBundle\Util\Codes;
use FOS\RestBundle\Controller\Annotations\RequestParam;
use FOS\RestBundle\Request\ParamFetcher;


class SupportRestController extends FOSRestController
{

    public function indexAction()
    {   
        
        return true;
    }
    
    /**
     * Check Create Support and save to database, enctype=multipart/form-data.
     * @param Request $request Request
     * 
     * @ApiDoc(
     *   resource = true,
     *   description = "Check user info and save to database, enctype=multipart/form-data.",
     *   parameters={
     *     {"name"="number", "dataType"="string", "required"=true, "description"="Number"},
     *     {"name"="serviceId", "dataType"="string", "required"=true, "description"="ServiceId"},
     *     {"name"="streetName", "dataType"="string", "required"=true, "description"="Street Name"},
     *     {"name"="postCost", "dataType"="string", "required"=true, "description"="Post Cost"},
     *     {"name"="city", "dataType"="string", "required"=true, "description"="City"},
     *     {"name"="infomaition", "dataType"="string", "required"=true, "description"="Infomaition"},
     *     {"name"="date", "dataType"="string", "required"=true, "description"="Date"},
     *     {"name"="timeSlot", "dataType"="string", "required"=true, "description"="Time Slot"},
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
    public function createSupportAction(Request $request){
        
        $entity = new Support();
        
        $dataRequest = $request->request->all();   
        
        $form = $this->createForm(new SupportType(), $entity); 
        $form->handleRequest($request);        
        $date = date('Y-m-d', strtotime($dataRequest['date']));
        $entity->setDate(new \DateTime($date));
        $entity->setStatus(1);
        $entity->setDateCreate(new \DateTime());
        $manager = $this->get('sf_smartfix.support.manager');
        if ($request->getMethod() == 'POST') {  
            $data = $manager->createSupport($entity, $dataRequest);  
        }
        return $data;
    }
    /**
     * Check Create Support and save to database, enctype=multipart/form-data.
     * @param Request $request Request
     * 
     * @ApiDoc(
     *   resource = true,
     *   description = "Check user info and save to database, enctype=multipart/form-data.",
     *   parameters={
     *     {"name"="id", "dataType"="hidden", "required"=true, "description"="id"},
     *     {"name"="ccNumber", "dataType"="string", "required"=true, "description"="ccNumber"},
     *     {"name"="exp", "dataType"="DateTime", "required"=true, "description"="Exp"},
     *     {"name"="num", "dataType"="Integer", "required"=true, "description"="Num"},
     
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
    public function updateSupportAction(Request $request){
        
        $entity = new Support();
        
        $dataRequest = $request->request->all();   
        
        $form = $this->createForm(new SupportType(), $entity); 
        $form->handleRequest($request);
        $manager = $this->get('sf_smartfix.support.manager');
        if ($request->getMethod() == 'POST') {  
            $data = $manager->updateSupport($entity, $dataRequest);  
        }
        return $data;
    }
    /**
     * Check Follow my order Support, enctype=multipart/form-data.
     * @param Request $request Request
     * 
     * @ApiDoc(
     *   resource = true,
     *   description = "Follow my order",
     *   
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
    public function listSupportAction(Request $request){
        $manager = $this->get('sf_smartfix.support.manager');
        $data = $manager->listSupport();
        return $data;
    }
    
}
