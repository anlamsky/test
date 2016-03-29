<?php

namespace SF\SmartfixBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ServiceType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('serviceName')
            ->add('avatar','file')
            ->add('status')
            ->add('dateCreate')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SF\SmartfixBundle\Entity\Service',
            'csrf_protection'   => false,
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
