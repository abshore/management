<?php

namespace Gestion\EmploisBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EmploiType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('classe', 'entity', array(
                    'class' => 'GestionEmploisBundle:Classe',
                    'empty_value' => '',
                    'attr' => array('class' => 'form-control')))
                ->add('groupe', 'choice', array(
                    'empty_value' => '',
                    'attr' => array('class' => 'form-control')))
                ->add('matiere', 'entity', array(
                    'class' => 'GestionEmploisBundle:Matiere',
                    'empty_value' => '',
                    'attr' => array('class' => 'form-control')))
                ->add('jour', 'date', array(
                    'input' => 'datetime',
                    'widget' => 'single_text',
                    'format' => 'dd-MM-yyyy',                    
                    'attr' => array('class' => 'form-control')))
                ->add('heureDeb', 'text', array(
                    'label'=>'Debut de seance',
                    
                    'attr' => array('class' => 'form-control')))
                ->add('heureFin', 'text', array(
                    'label'=>'Fin de seance',
                    
                    'attr' => array('class' => 'form-control')))
//                ->add('prof', 'entity', array(
//                    'class' => 'GestionUserBundle:Prof',
//                    'empty_value' => '',
//                    'attr' => array('class' => 'form-control')))
                ->add('salle', 'entity', array(
                    'class' => 'GestionEmploisBundle:Salle',
                    'empty_value' => '',
                    'attr' => array('class' => 'form-control')))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Gestion\EmploisBundle\Entity\Emploi'
        ));
    }

    public function getName() {
        return 'gestion_emploisbundle_emploitype';
    }

}
