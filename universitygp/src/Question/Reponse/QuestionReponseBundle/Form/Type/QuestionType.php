<?php
# src/Question\Reponse\QuestionReponseBundle/Form/Type/QuestionType.php
 
namespace Question\Reponse\QuestionReponseBundle\Form\Type;
 
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
 
class QuestionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('matiere', 'text',array('attr'=> array('class'=>'form-control')))
                ->add('prof', 'text',array('label'=>'Professeur','attr'=> array('class'=>'form-control')))
                ->add('question', 'textarea',array('attr'=> array('class' => 'ckeditor')))
		->add('piece_jointe', 'file',array('required'=>false,'attr'=> array('class'=>'form-control')))
		->add('matiere', 'entity', array(
                'class' => 'Gestion\EmploisBundle\Entity\Matiere',
                'property' => 'libelle','attr'=> array('class'=>'form-control')));
    }
 
    public function getName()
    {
        return 'Question';
    }
}
?>