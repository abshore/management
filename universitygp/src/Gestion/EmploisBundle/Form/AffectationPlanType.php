<?php

namespace Gestion\EmploisBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AffectationPlanType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('classe','entity',array(
                    'class' => 'GestionEmploisBundle:Classe',
                    'empty_value' => '',
                    'attr' => array('class' => 'form-control')))
                ->add('matiere','entity',array(
                    'class' => 'GestionEmploisBundle:Matiere',
                    'empty_value' => '',
                    'attr' => array('class' => 'form-control')))
                ->add('groupe', 'choice', array(
                    'empty_value' => '',
                    'attr' => array('class' => 'form-control')))
                ->add('prof','entity',array(
                    'class' => 'GestionUserBundle:Prof',
                    'empty_value' => '',
                    'attr' => array('class' => 'form-control')))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Gestion\EmploisBundle\Entity\AffectationPlan'
        ));
    }

    public function getName() {
        return 'gestion_emploisbundle_affectationplantype';
    }

}
