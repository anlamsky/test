<?php

namespace SF\RESTBundle\Controller;

use SF\SmartfixBundle\Entity\Review;
use SF\SmartfixBundle\Form\ReviewType;

use Symfony\Component\HttpFoundation\Request;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\Post;
use FOS\RestBundle\View\View;
use FOS\RestBundle\Util\Codes;
use FOS\RestBundle\Controller\Annotations\RequestParam;
use FOS\RestBundle\Request\ParamFetcher;


class ReviewRestController extends FOSRestController
{

    public function indexAction()
    {   
        
        return true;
    }
    
    /**
     * Check Create Review and save to database, enctype=multipart/form-data.
     * @param Request $request Request
     * 
     * @ApiDoc(
     *   resource = true,
     *   description = "Check user info and save to database, enctype=multipart/form-data.",
     *   parameters={
     *     {"name"="assId", "dataType"="integer", "required"=true, "description"="Assitant"},
     *     {"name"="clientId", "dataType"="integer", "required"=true, "description"="Client"},
     *     {"name"="assType", "dataType"="integer", "required"=true, "description"="Assitant Type (1 or 2 {[On-site assistance] or [Remote assistance]})"},
     *     {"name"="rating", "dataType"="integer", "required"=true, "description"="on a scale 1 to 10 , 10 being the best score"},
     *     {"name"="onTime", "dataType"="integer", "required"=true, "description"="On time (yes or no)"},
     *     {"name"="proFix", "dataType"="integer", "required"=true, "description"="Problem fixed (yes or no)"},
     *     {"name"="countesy", "dataType"="integer", "required"=true, "description"="Courtesy (1 to 5)"},
     *     {"name"="clarityOrExp", "dataType"="integer", "required"=true, "description"="Clarity of explainations (1 to 5)"},
     *     {"name"="comment", "dataType"="text", "required"=true, "description"="Add your comments here"},
     *   },
     *   statusCodes = {
     *      200 = {
     *          "Returned when successful",
     *          "- Status true : Get data",
     *          " -{review_token(AssId, ClientId, id), id review}",
     *          "- Status false : Show message",
     *      },
     *      400 = "Returned when call has errors",
     *      401 = "Returned when Unauthorized, error username/password HTTP Authentication",
     *   }
     * )
     *
     * @return View
     */
    public function createReviewAction(Request $request){
        
        $entity = new Review();  
        $dataRequest = $request->request->all();
        $form = $this->createForm(new ReviewType(), $entity); 
        $form->handleRequest($request);   
        $entity->setDateCreate(new \DateTime());
        $manager = $this->get('sf_smartfix.review.manager');
        if ($request->getMethod() == 'POST') {  
            $data = $manager->createReview($entity, $dataRequest);  
        }
        return $data;
    }
    
    
}
