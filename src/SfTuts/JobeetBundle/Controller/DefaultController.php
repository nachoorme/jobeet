<?php

namespace SfTuts\JobeetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Symfony\Component\HttpFoundation\Response;
class DefaultController extends Controller
{
    /**
     * @Route("/holamundo/{name}")
     * @Template()
     */
    public function indexAction($name)
    {
        return array('name' => $name);
    }
    
     /**
     * @Route("/holamundo/response/{name}")
     * @Template()
     */
    public function responseAction($name)
    {
        return new Response('<html><body>Hello '.$name.'!</body></html>');
    }
}
