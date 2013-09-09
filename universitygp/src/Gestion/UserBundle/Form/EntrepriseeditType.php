<?php

namespace Gestion\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EntrepriseeditType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            
            ->add('plainPassword')
            ->add('email')
            ->add('effectifs')
            ->add('activite')
            ->add('localisation')
            ->add('nom')
            ->add('mobile')
            ->add('tel')
            ->add('image', 'file',array('data_class'=>NULL))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Gestion\UserBundle\Entity\Entreprise',
             'roles' => null
        ));
    }

    public function getName()
    {
        return 'gestion_userbundle_entreprisetype';
    }
}
