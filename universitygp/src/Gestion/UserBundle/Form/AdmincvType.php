<?php

namespace Gestion\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AdmincvType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                
                ->add('nom')
                ->add('prenom')
               
           
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Gestion\UserBundle\Entity\Admin'
        ));
    }

    public function getName() {
        return 'gestion_userbundle_admintype';
    }

}
