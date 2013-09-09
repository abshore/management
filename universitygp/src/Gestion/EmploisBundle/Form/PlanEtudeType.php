<?php

namespace Gestion\EmploisBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PlanEtudeType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                 ->add('formation', 'entity', array(
                    'class' => 'GestionEmploisBundle:Formation',
                    'empty_value' => '',
                    'attr' => array('class' => 'form-control')))
                ->add('diplome', 'entity', array(
                    'class' => 'GestionEmploisBundle:Diplome',
                    'empty_value' => '',
                    'attr' => array('class' => 'form-control')))
                ->add('niveau', 'choice', array(
                    'empty_value' => '',
                    'attr' => array('class'=>'form-control')))
                ->add('matiere', 'entity', array(
                    'class' => 'GestionEmploisBundle:Matiere',
                    'empty_value' => '',
                    'attr' => array('class' => 'form-control')))
                ->add('nbHeure', 'text', array(
                    'label'=>'Nombre d\'heures totales', 
                    'attr' => array('class' => 'form-control')))
                ->add('nbHCours', 'text', array(
                    'label'=>'Nombre d\'heures du cours', 
                    'attr' => array('class' => 'form-control')))
                ->add('nbHTD', 'text', array(
                    'label'=>'Nombre d\'heures du TD', 
                    'attr' => array('class' => 'form-control')))
                ->add('nbHTP', 'text', array(
                    'label'=>'Nombre d\'heures du TP',
                    'attr' => array('class' => 'form-control')))
                ->add('chapitres', 'textarea', array('attr' => array('class' => 'ckeditor form-control')))
                
               
                
                
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Gestion\EmploisBundle\Entity\PlanEtude'
        ));
    }

    public function getName() {
        return 'gestion_emploisbundle_planetudetype';
    }

}
