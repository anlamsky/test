<?php

namespace SF\SmartfixBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ReviewType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('assId')
            ->add('clientId')
            ->add('assType')
            ->add('rating')
            ->add('onTime')
            ->add('proFix')
            ->add('countesy')
            ->add('clarityOrExp')
            ->add('comment')
            ->add('dateCreate')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SF\SmartfixBundle\Entity\Review'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return null;
    }
}
