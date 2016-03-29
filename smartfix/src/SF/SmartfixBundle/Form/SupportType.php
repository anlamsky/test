<?php

namespace SF\SmartfixBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SupportType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('number')
            ->add('serviceId')
            ->add('streetName')
            ->add('postCost')
            ->add('city')
            ->add('infomaition')
            ->add('date')
            ->add('timeSlot')
            ->add('dateCreate')
            ->add('ccNumber')
            ->add('exp')
            ->add('num')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SF\SmartfixBundle\Entity\Support'
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
