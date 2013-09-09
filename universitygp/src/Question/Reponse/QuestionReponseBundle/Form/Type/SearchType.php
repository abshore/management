<?php
# src/Question\Reponse\QuestionReponseBundle/Form/Type/ReponseType.php
 
namespace Question\Reponse\QuestionReponseBundle\Form\Type;
 
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
 
class SearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('search', 'text',array('required'=>true,'attr'=> array('class'=>'form-control','placeholder'=>'Search')));
		
    }
 
    public function getName()
    {
        return 'Search';
    }
}
?>