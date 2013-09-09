<?php

namespace Gestion\EmploisBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MatiereType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('code', 'text')
                ->add('libelle', 'text')
                ->add('Syllabsus', 'textarea', array('attr' => array('class' => 'ckeditor form-control')))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Gestion\EmploisBundle\Entity\Matiere'
        ));
    }

    public function getName() {
        return 'gestion_emploisbundle_matieretype';
    }

}
