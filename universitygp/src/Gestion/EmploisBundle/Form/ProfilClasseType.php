<?php

namespace Gestion\EmploisBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProfilClasseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('code','text', array('attr' => array('class'=>'form-control')))
            ->add('libelle','text', array('attr' => array('class'=>'form-control')))
            ->add('paniers', 'entity', array(
                    'class' => 'GestionEmploisBundle:Panier',
                    'property' =>'num',
                    'multiple' => true,
                    'expanded' => true,
                
                    ))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Gestion\EmploisBundle\Entity\ProfilClasse'
        ));
    }

    public function getName()
    {
        return 'gestion_emploisbundle_profilclassetype';
    }
}
