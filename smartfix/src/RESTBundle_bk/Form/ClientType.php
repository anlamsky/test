<?php

namespace RESTBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\HttpFoundation\File\File;

class ClientType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName')
            ->add('lastName')
            ->add('avatar', 'file', array('required'=> FALSE,
                        'data_class' => null,
                ))
            ->add('email')
            ->add('password','password')
            ->add('mobile')
            ->add('address')
            ->add('creditCart')
        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'RESTBundle\Entity\Client'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'smartfixbundle_client';
    }
}
