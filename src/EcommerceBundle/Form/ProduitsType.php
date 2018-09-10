<?php

namespace EcommerceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use EcommerceBundle\Form\CategorieType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use EcommerceBundle\Entity\Categories;
/**
 * Description of ProduitsType
 *
 * @author sohrab
 */
class ProduitsType extends AbstractType{
    //put your code here
    
     /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom');
        $builder->add('description');
        $builder->add('prix');
        $builder->add('disponible','choice',array(
            'choices'=>array('0'=>'non','1'=>'oui'),
            'expanded'=>true,
            'multiple'=>false
        ));
        $builder->add('categorie',EntityType::class, array(
            'class' => Categories::class,
            'choice_label' => 'nom',
        ));
        $builder->add('envoyer','submit');
    }
    /**
     * Configures the options for this type.
     *
     * @param OptionsResolver $resolver The resolver for the options
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EcommerceBundle\Entity\Produits'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        // As of Symfony 2.8, the name defaults to the fully-qualified class name
        return 'ecommercebundle_produits';
    }
    
}
