<?php

namespace EcommerceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Description of RechercheType
 *
 * @author sohrab
 */
class RechercheType extends AbstractType{
    //put your code here
        /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('recherche');
    }
    
    public function getName() {
        return 'ecommercebundle_recherche';
    }
    
}
