<?php
# src/Question\Reponse\QuestionReponseBundle/Form/Type/ReponseType.php
 
namespace Question\Reponse\QuestionReponseBundle\Form\Type;
 
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
 
class ReponseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('matiere', 'text',array('read_only'=>true ,'attr'=> array('class'=>'form-control')))
                ->add('etudiant', 'text',array('read_only'=>true,'attr'=> array('class'=>'form-control')))
                ->add('reponse', 'textarea',array('attr'=> array('class'=>'ckeditor')))
		->add('piece_jointe', 'file',array('required'=>false,'attr'=> array('class'=>'form-control')));
		
    }
 
    public function getName()
    {
        return 'Reponse';
    }
}
?>