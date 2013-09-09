<?php
# src/User/NewsBundle/Form/Type/NouvelleType.php
 
namespace User\NewsBundle\Form\Type;
 
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
 use Symfony\Component\OptionsResolver\OptionsResolverInterface;
class NouvelleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('libelleNouvelle', 'text',array('label' => 'Titre','attr' => array('class' => 'form-control')))
                ->add('descriptionNouvelle', 'textarea', array('label' => 'Description','attr' => array('class' => 'ckeditor')))
	        ->add('dateDebutNouvelle', 'date',array('label' => 'Date Debut','attr' => array('class' => 'datepicker')))
                ->add('dateFinNouvelle', 'date',array('label' => 'Date Fin','attr' => array('class' => 'datepicker')))
                ->add('urlPieceJointe', 'file',array('label' => 'Emplacement','required'  => false))
            ;
    }
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'User\NewsBundle\Entity\Nouvelle',
            'cascade_validation' => true,
           
        ));
    }
    public function getName()
    {
        return 'user_newsbundle_nouvelletype';
    }
}
?>