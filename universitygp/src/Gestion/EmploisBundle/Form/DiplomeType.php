<?php

namespace Gestion\EmploisBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DiplomeType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('titre','text', array('attr' => array('class'=>'form-control')))
                ->add('periode', 'choice', array(
                    'choices' => array('semestre' => 'Semestre', 'trimestre' => 'Trimestre'),
                    'required' => false,
                    'attr' => array('class'=>'form-control')
                ))
                ->add('niveau', 'choice', array(
                    'choices' => array('2' => '2ans', '3' => '3ans'),
                    'required' => false,
                    'attr' => array('class'=>'form-control')
                ))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Gestion\EmploisBundle\Entity\Diplome'
        ));
    }

    public function getName() {
        return 'gestion_emploisbundle_diplometype';
    }

}
