<?php

namespace PageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    
    public function menuAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        $pages = $em->getRepository('PageBundle:Page')->findAll();
        
        return $this->render('PageBundle:Default:menu.html.twig',array('pages'=>$pages));
    }
    
    public function pageAction($id){
        
        $em = $this->getDoctrine()->getManager();
        
        $page = $em->getRepository('PageBundle:Page')->find($id);
        
        if(!$page) throw $this->createNotFoundException ("la page n'existe pas");

        return $this->render('PageBundle:Default:page.html.twig',array('page'=>$page));
    }
}
