<?php

namespace EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use EcommerceBundle\Form\ProduitsType;
use EcommerceBundle\Form\RechercheType;

class ProduitsController extends Controller
{
    public function produitsAction()
    {
        $em = $this->getDoctrine()->getManager();
        $produits = $em->getRepository('EcommerceBundle:Produits')->findAll();
        
        return $this->render('EcommerceBundle:Default:produits/produits.html.twig',array('produits'=>$produits));
    }
    
    public function presentationAction($id){
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('EcommerceBundle:Produits')->find($id);
        
        if(!$produit)
            throw $this->createNotFoundException ("La page n'existe pas");


        return $this->render('EcommerceBundle:Default:produits/presentation.html.twig',array('produit'=>$produit));
    }
    
    public function rechercheAction(){
        
        $recherche = new RechercheType();
        $form = $this->createForm($recherche);
        
        return $this->render('EcommerceBundle:Default:recherche/recherche.html.twig',array('form'=>$form->createView()));
    }
    
    public function rechercheTraithementAction(){
        $recherche = new RechercheType();
        $form = $this->createForm($recherche);
        
        $request = $this->get('request');
        if($request->isMethod('POST')){
            $form->submit($request);
            if($form->isValid()){
           $chaine = $form['recherche']->getData();
           $em = $this->getDoctrine()->getManager();
           $produits = $em->getRepository('EcommerceBundle:Produits')->rechercheByChaine($chaine);
            }
        }
        else {
            throw $this->createNotFoundException('La page n\'existe pas.');
        }
        
       return $this->render('EcommerceBundle:Default:produits/produits.html.twig',array('produits'=>$produits));
    }
}
