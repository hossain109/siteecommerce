<?php

namespace EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;

class PanierController extends Controller
{
    public function panierAction()
    {
       $session = $this->getRequest()->getSession();
       if(!$session->has('panier')) $session->set('panier', array());
     
        $em = $this->getDoctrine()->getManager();
        $produits = $em->getRepository('EcommerceBundle:Produits')->findArray(array_keys($session->get('panier')));
        $panier = $session->get('panier');

        return $this->render('EcommerceBundle:Default/panier:panier.html.twig',array('produits'=>$produits,
                                                                                        'panier'=>$panier));
    }
    
    public function ajouterAction($id)
    {
       $session = $this->getRequest()->getSession();
       if(!$session->has('panier')) $session->set('panier', array());
       
        $panier = $session->get('panier');
        
        if(array_key_exists($id, $panier)){
            if($this->getRequest()->query->get('qte')!=null)$panier[$id] = $this->getRequest()->query->get('qte');
                        $session->getFlashBag()->add('success', 'Quantité modifier avec succes');
        }else{              
        if($this->getRequest()->query->get('gte')!=null) 
                $panier[$id]=  $this->getRequest ()->query->get ('qte');
                else $panier[$id]=1;
               $session->getFlashBag()->add('success', 'Quantité ajouter avec succes');
            }
            
            $session->set('panier', $panier);

            return $this->redirect($this->generateUrl('panier'));
    }
    public function suprimerAction($id){
        
       $session = $this->getRequest()->getSession();
       $panier = $session->get('panier');
       
          if(array_key_exists($id, $panier))
          unset ($panier[$id]);
      
            $session->set('panier', $panier);
            $session->getFlashBag()->add('success', 'Article supprimer avec succes');
        
        return $this->redirect($this->generateUrl('panier'));
    }
    public function menuAction(){
        
        $session = $this->getRequest()->getSession();
        $panier = $session->get('panier');
        
        $compte = count($panier);

        return $this->render('EcommerceBundle:Default:panier/menu.html.twig',array('compte'=>$compte));
    }
}
