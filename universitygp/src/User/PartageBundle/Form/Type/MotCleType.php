<?php

namespace User\PartageBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MotCleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
                $builder->add('libelleMotCle', 'text',array('label' => 'Mot clé','attr' => array('class' => 'input-small')));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'User\PartageBundle\Entity\MotCle'
        ));
    }

    public function getName()
    {
        return 'user_partagebundle_motcletype';
    }
}
