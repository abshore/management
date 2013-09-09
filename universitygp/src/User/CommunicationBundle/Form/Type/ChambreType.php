<?php
# src/User/CommunicationBundle/Form/Type/ChambreType.php
 
namespace User\CommunicationBundle\Form\Type;
 
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
 
class ChambreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('libelle', 'text',array('attr'=> array('class'=>'form-control')))
				->add('user', 'genemu_jqueryselect2_entity', array(
            'class' => 'Gestion\UserBundle\Entity\User',
            'property' => 'username','attr'=> array('class'=>'form-control')
        ));
    }
 
    public function getName()
    {
        return 'Chambre';
    }
}
?>