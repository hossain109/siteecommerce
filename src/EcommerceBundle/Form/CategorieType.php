<?php
namespace EcommerceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CategorieType extends AbstractType{
 
        /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom');
        }
        
        
     /**
     * Configures the options for this type.
     *
     * @param OptionsResolver $resolver The resolver for the options
     */
    public function configureOptions(OptionsResolver $resolver)
    {
         $resolver->setDefaults(array(
            'data_class' => 'EcommerceBundle\Entity\Categories'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        // As of Symfony 2.8, the name defaults to the fully-qualified class name
        return 'ecommercebundle_categorie';
    }
}