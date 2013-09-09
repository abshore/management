<?php
# src/User/CommunicationBundle/Form/Type/MessageReponseType.php
 
namespace User\CommunicationBundle\Form\Type;
 
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
 
class MessageReponseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('destination', 'text',array('read_only'=>true,'attr'=> array('class'=>'form-control')))
                ->add('subject', 'text',array('attr'=> array('class'=>'form-control')))
                ->add('corps', 'textarea',array('attr'=> array('class'=>'ckeditor')))
				->add('piece_jointe', 'file',array('required'=>false,'attr'=> array('class'=>'form-control')))
				;
    }
 
    public function getName()
    {
        return 'MessageReponse';
    }
}
?>