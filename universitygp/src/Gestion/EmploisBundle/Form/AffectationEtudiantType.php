<?php

namespace Gestion\EmploisBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AffectationEtudiantType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('classe','entity',array(
                    'class' => 'GestionEmploisBundle:Classe',
                    'empty_value' => '',
                    'attr' => array('class' => 'form-control')))
                ->add('groupe', 'choice', array(
                    'empty_value' => '',
                    //'widget'=>'text',
                    'attr' => array('class' => 'form-control')))
                ->add('etudiants','entity',array(
                    'class' => 'GestionUserBundle:Etudiant',
                    'empty_value' => '',
                    'multiple'=>true,
                    'attr' => array('class' => 'form-control')))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Gestion\EmploisBundle\Entity\AffectationEtudiant'
        ));
    }

    public function getName() {
        return 'gestion_emploisbundle_affectationetudianttype';
    }

}
