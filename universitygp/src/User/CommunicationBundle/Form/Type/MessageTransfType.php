<?php
# src/User/CommunicationBundle/Form/Type/MessageReponseType.php
 
namespace User\CommunicationBundle\Form\Type;
 
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
 
class MessageTransfType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('destination', 'text',array('attr'=> array('class'=>'form-control','placeholder'=>'ex:admin;prof;etudiant')))
                ->add('subject', 'text',array('read_only'=>true,'attr'=> array('class'=>'form-control')))
                ->add('corps', 'textarea',array('read_only'=>true,'attr'=> array('class'=>'form-control')))
		->add('piece_jointe', 'text',array('read_only'=>true,'required'=>false,'attr'=> array('class'=>'form-control')))
				;
    }
 
    public function getName()
    {
        return 'MessageReponse';
    }
}
?>