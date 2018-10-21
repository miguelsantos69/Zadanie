<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        
        return $this->render('default/index.html.twig');
        
    }
    
    /**
     * @Route("/user - GET", name="userlist", methods={"GET"})
     */
    public function getUserAction() {
    
        $encoders = [
            new XmlEncoder(), 
            new JsonEncoder()
            ];
        $normalizers = [
            new ObjectNormalizer()
            ];
        $serializer = new Serializer($normalizers, $encoders);
        
        $em = $this->getDoctrine()->getManager();

        $user = $em->getRepository('AppBundle:User')->findAll();

        $response = new Response($serializer->serialize($user, 'json'));
        $response->headers->set('Content-Type', 'application/json');
        return $response;

    }
}

