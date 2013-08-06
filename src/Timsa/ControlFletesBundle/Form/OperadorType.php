<?php

namespace Timsa\ControlFletesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class OperadorType extends AbstractType{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder->add('nombre');
		$builder->add('telefono');
		$builder->add('CURP');
		$builder->add('RC');

	}

	public function getName(){
		return 'operador';
	}

	public function setDefaultOptions(OptionsResolverInterface $resolver)
	{
		$resolver->setDefaults(array(
									'data_class' => 'Timsa\ControlFletesBundle\Entity\Operador',
							  ));
	}
}

?>