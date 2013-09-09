<?php
# src/User/PartageBundle/Form/Type/DocumentUserType.php
 
namespace User\PartageBundle\Form\Type;
 
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
 use Symfony\Component\OptionsResolver\OptionsResolverInterface;
class DocumentUserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('note', 'choice', array(
                         'choices'   => array('1' => '1', '2' => '2','3'=>'3','4' => '4', '5' => '5'),
                          
                        )              
          );
    }

    public function getName()
    {
        return 'user_partagebundle_documentusertype';
    }
}
?>