<?php

namespace Gestion\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class LangueType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre','text', array('attr' => array('class' => 'form-control')))
            ->add('niveau','text', array('attr' => array('class' => 'form-control')))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Gestion\UserBundle\Entity\Langue'
        ));
    }

    public function getName()
    {
        return 'gestion_userbundle_languetype';
    }
}
