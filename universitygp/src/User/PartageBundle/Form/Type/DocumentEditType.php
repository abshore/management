<?php
# src/User/PartageBundle/Form/Type/DocumentEditType.php
namespace User\PartageBundle\Form\Type;
 
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
 
class DocumentEditType extends AbstractType// Ici, on hérite de DocumentType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    // On fait appel à la méthode buildForm du parent, qui va ajouter tous les champs à $builder
    $builder->add('libelleDoc', 'text',array('label' => 'Titre','attr' => array('class' => 'form-control')))
           ->add('motCle', 'text',array('label' => 'Liste des mots clés','attr' => array('class' => 'form-control')))
           ->add('resumeDoc', 'textarea', array('label' => 'Résumé','attr' => array('class' => 'ckeditor')))
            ->add('urlDoc', 'file',array('label' => 'Emplacement','data_class' => null,'required' => false))
            ->add('dateValidite', 'date',array('label' => 'Date Validité','attr' => array('class' => 'datepicker')));
				
				
				
				}

 

 
  // On modifie cette méthode, car les deux formulaires doivent avoir un nom différent
  public function getName()
  {
    return 'user_partagebundle_documentedittype';
  }
}