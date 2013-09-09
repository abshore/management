<?php

namespace Gestion\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FormationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('niveau','text', array('attr' => array('class' => 'form-control')))
            ->add('nomEcole','text', array('attr' => array('class' => 'form-control')))
           
            ->add('description','text', array('attr' => array('class' => 'form-control')))
             ->add('dateDebut','date')
            ->add('dateFin','date')
            ->add('pays','text', array('attr' => array('class' => 'form-control')))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Gestion\UserBundle\Entity\Formation'
        ));
    }

    public function getName()
    {
        return 'gestion_userbundle_formationtype';
    }
}
