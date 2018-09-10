<?php

namespace EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CategorieController extends Controller
{
    public function menuAction()
    {
        $em  = $this->getDoctrine()->getManager();
        $categories = $em->getRepository('EcommerceBundle:Categories')->findAll();
        
        return $this->render('EcommerceBundle:Default:categorie/menu.html.twig',array('categories'=>$categories));
    }
    
    public function categorieAction($categorie)
    {
        $em = $this->getDoctrine()->getManager();
        $produits = $em->getRepository('EcommerceBundle:Produits')->byCategorie($categorie);
        
        return $this->render('EcommerceBundle:Default:produits/produits.html.twig',array('produits'=>$produits));
    }
}
