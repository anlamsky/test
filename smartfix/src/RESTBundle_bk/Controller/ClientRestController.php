<?php

namespace RESTBundle\Controller;

use FOS\RestBundle\Controller\Annotations\View;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use FOS\RestBundle\Controller\FOSRestController;
use RESTBundle\Entity\Client;
use RESTBundle\Form\ClientType;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class ClientRestController extends FOSRestController
{

    public function indexAction()
    {
        
        return true;
    }
    /**
    * @ApiDoc(
     * resource=true,
     * description="Creates a new page from the submitted data",
     * * requirements={
     *      {"name"="_format", "dataType"="String", "requirement"="", "description"="json|xml" },
     *      {"name"="smartfixbundle_client[firstName]", "dataType"="String", "requirement"="", "description"="firstName" },
     *      {"name"="smartfixbundle_client[lastName]", "dataType"="String", "requirement"="", "description"="lastname" },
     *      {"name"="smartfixbundle_client[email]", "dataType"="String", "requirement"="", "description"="email" },
     *      {"name"="smartfixbundle_client[password]", "dataType"="String", "requirement"="", "description"="password" },
     *      {"name"="smartfixbundle_client[mobile]", "dataType"="String", "requirement"="", "description"="mobile" },
     *      {"name"="smartfixbundle_client[address]", "dataType"="String", "requirement"="", "description"="address" },
     *      {"name"="smartfixbundle_client[creditCart]", "dataType"="String", "requirement"="", "description"="creditCart" },
     *   },
     * 
     * 
     * statusCodes = {
     * 200 = "Returned when successful",
     * 400 = "Returned when the form has errors"
     * }
     * )
     */
    public function addAction(Request $request)
    {
        
        $entity = new Client();
        $form = $this->createForm(new ClientType(), $entity);        
        $form->handleRequest($request);
        echo "<pre>";
        print_r($form->getData());exit;
//        if ($form->isValid()) {
//            $entity->uploadImage();
            $encoder = $this->container->get('security.encoder_factory')
                ->getEncoder($entity);
            $password = $encoder->encodePassword($entity->getPassword(), '');
            $entity->setPassword($password);
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            echo $entity->getId();exit;
//            return $this->redirect($this->generateUrl('client_show', array('id' => $entity->getId())));
//        }

//        return $this->render('SmartfixBundle:Client:new.html.twig', array(
//            'entity' => $entity,
//            'form'   => $form->createView(),
//        ));
    }

}
