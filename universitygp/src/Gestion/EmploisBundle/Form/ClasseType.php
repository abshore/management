<?php

namespace Gestion\EmploisBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ClasseType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('code','text',array('attr' => array('class'=>'form-control')))
                ->add('nbGroupe','text',array('attr' => array('class'=>'form-control')))
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
                //->add('affectations')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Gestion\EmploisBundle\Entity\Classe'
        ));
    }

    public function getName() {
        return 'gestion_emploisbundle_classetype';
    }

}
