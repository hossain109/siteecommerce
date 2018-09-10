<?php

namespace EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use EcommerceBundle\Form\ProduitsType;

class ProduitAdminController extends Controller
{
    public function produitAction()
    {
        $produits = new ProduitsType();
        $form = $this->createForm($produits);

        return $this->render('EcommerceBundle:Default/produits:index.html.twig',array('form'=>$form->createView()));
    }
}
