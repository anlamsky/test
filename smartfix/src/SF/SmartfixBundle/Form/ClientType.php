<?php

namespace SF\SmartfixBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class ClientType extends AbstractType
{
    /**
     * 
     * 
     * 
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName')
            ->add('lastName')
            ->add('avatar', 'file', array('required'=> true))
            ->add('email')
            ->add('password','password')
            ->add('mobile')
            ->add('address')
            ->add('creditCart')
        ;
    }
    
    /**
     * 
     * 
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SF\SmartfixBundle\Entity\Client'
        ));
    }

    /**
     * 
     * 
     */
    public function getName()
    {
        return null;
    }
}
