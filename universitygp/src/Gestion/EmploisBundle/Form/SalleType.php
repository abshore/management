<?php

namespace Gestion\EmploisBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SalleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('num','text',array('attr' => array('class'=>'form-control')))
            ->add('type', 'choice', array(
                'choices'=>array('Amphi'=>'Amphi','Salle TD'=>'Salle TD', 'Salle TP'=>'Salle TP'),
                    'empty_value' => '',
                    'attr' => array('class'=>'form-control')))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Gestion\EmploisBundle\Entity\Salle'
        ));
    }

    public function getName()
    {
        return 'gestion_emploisbundle_salletype';
    }
}
