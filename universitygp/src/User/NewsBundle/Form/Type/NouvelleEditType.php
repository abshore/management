<?php
# src/User/NewsBundle/Form/Type/NouvelleEditType.php
namespace User\NewsBundle\Form\Type;
 
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
 
class NouvelleEditType extends AbstractType// Ici, on hérite de DocumentType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('libelleNouvelle', 'text',array('label' => 'Titre','attr' => array('class' => 'form-control')))
                ->add('descriptionNouvelle', 'textarea', array('label' => 'Description','attr' => array('class' => 'ckeditor')))
	        ->add('dateDebutNouvelle', 'date',array('label' => 'Date Debut','attr' => array('class' => 'datepicker')))
                ->add('dateFinNouvelle', 'date',array('label' => 'Date Fin','attr' => array('class' => 'datepicker')))
                ->add('urlPieceJointe', 'file',array('label' => 'Emplacement','data_class' => null,'required'  => false))
            ;
    }

 

 
  // On modifie cette méthode, car les deux formulaires doivent avoir un nom différent
  public function getName()
  {
    return 'user_newsbundle_nouvelleedittype';
  }
}