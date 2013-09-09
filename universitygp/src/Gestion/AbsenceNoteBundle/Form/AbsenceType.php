<?php

namespace Gestion\AbsenceNoteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AbsenceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('groupe')
            ->add('date')
            ->add('creneau')
            ->add('prof')
            ->add('etudiant')
            ->add('classe')
            ->add('matiere')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Gestion\AbsenceNoteBundle\Entity\Absence'
        ));
    }

    public function getName()
    {
        return 'gestion_absencenotebundle_absencetype';
    }
}
