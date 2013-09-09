<?php

namespace Gestion\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ExperienceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre','text', array('attr' => array('class' => 'form-control')))
            ->add('secteur','text', array('attr' => array('class' => 'form-control')))
            ->add('dateDebut','date')
            ->add('dateFin','date')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Gestion\UserBundle\Entity\Experience'
        ));
    }

    public function getName()
    {
        return 'gestion_userbundle_experiencetype';
    }
}
