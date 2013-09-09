<?php

namespace Gestion\OffreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EmploieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre')
            ->add('description')
            ->add('dateDebut')
            ->add('dateFin')
             ->add('secteur', 'choice', array(
                    'choices' => array('Comptabilité' => 'Comptabilité', 'Marketing' => 'Marketing', 'Architecture' => 'Architecture','Arts & Design'=>'Arts & Design','Finance'=>'Finance','Service à la clientèle'=>'Service à la clientèle','Santé'=>'Santé','Ressources humaines'=>'Ressources humaines','Informatique'=>'Informatique','Gestion'=>'Gestion','Télécommunications'=>'Télécommunications','Ingénierie'=>'Ingénierie'),
                    'multiple' => true, 'attr' => array('class' => 'form-control')
                ))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Gestion\OffreBundle\Entity\Emploie'
        ));
    }

    public function getName()
    {
        return 'gestion_offrebundle_emploietype';
    }
}
