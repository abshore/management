<?php

namespace Gestion\EmploisBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PanierType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('num','text', array('attr' => array('class'=>'form-control')))
            ->add('matieres','entity', array(
                'class' => 'GestionEmploisBundle:Matiere',
                'multiple' => true,
                'attr' => array('class'=>'form-control')))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Gestion\EmploisBundle\Entity\Panier'
        ));
    }

    public function getName()
    {
        return 'gestion_emploisbundle_paniertype';
    }
}
