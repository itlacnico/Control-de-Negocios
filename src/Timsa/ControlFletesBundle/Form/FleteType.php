<?php

namespace Timsa\ControlFletesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FleteType extends AbstractType{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder->add('relacion', 'entity',
						array(
							'class' => 'TimsaControlFletesBundle:Relacion',
							'query_builder' => function(EntityRepository $er)
							                {
							                    return $er->createQuery('');
							                            
							                }
						 ) 
					 );
	}

	public function getName(){
		return 'flete';
	}

	public function setDefaultOptions(OptionsResolverInterface $resolver)
	{
		$resolver->setDefaults(array(
									'data_class' => 'Timsa\ControlFletesBundle\Entity\Operador',
							  ));
	}
}

?>