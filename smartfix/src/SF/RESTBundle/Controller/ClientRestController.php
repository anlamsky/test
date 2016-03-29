<?php

namespace SF\RESTBundle\Controller;

use FOS\RestBundle\Controller\Annotations\View;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use FOS\RestBundle\Controller\FOSRestController;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use FOS\RestBundle\Request\ParamFetcher;
use FOS\RestBundle\Controller\Annotations\RequestParam;
use FOS\RestBundle\Controller\Annotations\QueryParam;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\Put;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use FOS\RestBundle\Controller\Annotations\Post;
use Symfony\Component\Validator\ConstraintViolationListInterface;

use SF\SmartfixBundle\Entity\Client;
use SF\SmartfixBundle\Controller\ClientController;
use SF\SmartfixBundle\Form\ClientType;

class ClientRestController extends FOSRestController
{

    public function indexAction()
    {        
        return true;
    }
    /**
     * Check user info and save to database, enctype=multipart/form-data.
     * 
     * @ApiDoc(
     *   resource = true,
     *   description = "Check Client info and save to database, enctype=multipart/form-data.",
     *   parameters={
     *      {"name"="firstName", "dataType"="String", "required"="true", "description"="firstName" },
     *      {"name"="lastName", "dataType"="String", "required"="true", "description"="lastname" },
     *      {"name"="email", "dataType"="String", "required"="true", "description"="email" },
     *      {"name"="password", "dataType"="String", "required"="true", "description"="password" },
     *      {"name"="mobile", "dataType"="String", "required"="true", "description"="mobile" },
     *   },
     *   statusCodes = {
     *      200 = {
     *          "Returned when successful",
     *          "Status true : Get data",
     *          "Status false : Show message",
     *      },
     *      404 = "Returned when call has errors",
     *      401 = "Returned when Unauthorized, error username/password HTTP Authentication",
     *   },
     * )
     *
     * @return (array) $message
     */
    public function signUpAction()
    {   
        $request = $this->getRequest();
        $entity = new Client();
        $dataRequest = $request->request->all();
        $form = $this->createForm(new ClientType, $entity); 
//        $form->handleRequest($request);
        
        $manager = $this->get('sf_smartfix.client.manager');
        if ($request->getMethod() == 'POST') {            
            $form->handleRequest($request);            
            $data = $manager->processSignup($entity, $dataRequest);  
        }
        return $data;
    }
    /**
     * Create a Token from the submitted data.
     *
     * @param Request $request Request
   
     * @ApiDoc(
     *   resource = true,
     *   description = "Login Client.",
     *   parameters={
     *      {"name"="email", "dataType"="String", "required"="true", "allowBlank"="false", "nullable"="false", "strict"="true", "description"="email" },
     *      {"name"="password", "dataType"="String", "required"="true", "allowBlank"="false", "nullable"="false", "strict"="true", "description"="password" },
     *      {"name"="device_token", "dataType"="String", "required"="true", "allowBlank"="true", "nullable"="false", "strict"="false", "description"="Device Token." },
     *   },
     *   statusCodes = {
     *      200 = {
     *          "Returned when successful",
     *          "- Status true : Get data",
     *          "----- {login_token, lastname, firstname}",
     *          "- Status false : Show message",
     *      },
     *      400 = "Returned when call has errors",
     *      401 = "Returned when Unauthorized, error username/password HTTP Authentication",
     *   },
     * )
     *
     * @return View
     */
    public function signInAction(){
        
        $request = $this->getRequest();
        $dataRequest = $request->request->all();
        $manager = $this->get('sf_smartfix.client.manager');
        $data = $manager->clientLogin(
                $dataRequest['email'], $dataRequest['password'], $dataRequest['device_token']
        );

        return $data;
    }
    /**
     * Submit email to recovery password.
     *
     * @param Request $request Request
    
     * @ApiDoc(
     *   resource = true,
     *   description = "Submit email to recovery password.",
     *  parameters={
     *      {"name"="email", "dataType"="String", "required"="true", "allowBlank"="false", "nullable"="false", "strict"="true", "description"="email" },
     *      {"name"="device_id", "dataType"="String", "required"="true", "allowBlank"="false", "nullable"="false", "strict"="true", "description"="device_id" },
     *   },
     *   statusCodes = {
     *      200 = {
     *          "Returned when successful",
     *          "- Status true : Show message",
     *          "- Status false : Show message",
     *      },
     *      400 = "Returned when call has errors",
     *      401 = "Returned when Unauthorized, error username/password HTTP Authentication",
     *   },
     * )
     *
     * @return View
     */
    public function clientForgotPasswordAction()
    {
        $request = $this->getRequest();
        $dataRequest = $request->request->all();
        
        $managerUser = $this->get('sf_smartfix.client.manager');

        $data = $managerUser->processForgotPassword(
                $dataRequest['email'], $dataRequest['device_id']
        );

        return $data;
    }
    
    
    /**
     * Submit upload avatar.
     *
     * @param Request $request Request
    
     * @ApiDoc(
     *   resource = true,
     *   description = "Submit upload avatar",
     *  parameters={
     *      {"name"="avatar", "dataType"="file", "required"="true", "allowBlank"="false", "nullable"="false", "strict"="true", "description"="update avatar" },
     *   },
     *   statusCodes = {
     *      200 = {
     *          "Returned when successful",
     *          "- Status true : Show message",
     *          "- Status false : Show message",
     *      },
     *      400 = "Returned when call has errors",
     *      401 = "Returned when Unauthorized, error username/password HTTP Authentication",
     *   },
     * )
     *
     * @return View
     */
    public function clientUploadAvatarAction(Request $request)
    {
        $dataRequest = $request->request->all();
        $avatar = $request->files->get('avatar');
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('SmartfixBundle:Client')->find(22);
          
        $updateImageForm = $this->createEditImageForm($entity);
        $updateImageForm->handleRequest($request);
        echo "<pre>";
        print_r($avatar);exit;
        $entity->uploadImage();        
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
    /**
    * Creates a form to edit image Student entity.
    *
    * @param Student $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditImageForm(Client $entity)
    {
        $form = $this->createForm(new ClientType(), $entity);
        $form->remove('firstName');
        $form->remove('lastName');
        $form->remove('email');
        $form->remove('password');
        $form->remove('mobile');
        $form->remove('address');
        $form->remove('creditCart');
        return $form;
    }
}
