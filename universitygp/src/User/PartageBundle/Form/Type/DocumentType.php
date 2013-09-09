<?php
# src/User/PartageBundle/Form/Type/DocumentType.php
 
namespace User\PartageBundle\Form\Type;
 
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
 use Symfony\Component\OptionsResolver\OptionsResolverInterface;
class DocumentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('libelleDoc', 'text',array('label' => 'Titre','attr' => array('class' => 'form-control')))
                ->add('motCle', 'text',array('label' => 'Liste des mots clés','attr' => array('class' => 'form-control')))
             //   ->add('motCles', 'collection', array('type'=> new MotCleType(),'allow_add'    => true,'allow_delete' => true))
                ->add('resumeDoc', 'textarea', array('label' => 'Résumé','attr' => array('class' => 'ckeditor')))
		->add('urlDoc', 'file',array('label' => 'Emplacement'))
                ->add('dateValidite', 'date',array('label' => 'Date Validité','attr' => array('class' => 'datepicker')))
           ;
    }
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'User\PartageBundle\Entity\Document',
            'cascade_validation' => true,
           
        ));
    }
    public function getName()
    {
        return 'user_partagebundle_documenttype';
    }
}
?>