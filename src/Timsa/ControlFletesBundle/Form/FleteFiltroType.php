<?php

namespace Timsa\ControlFletesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class OperadorType extends AbstractType{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder->add('operador');
		$builder->add('economico');
		$builder->add('socio');
		$builder->add('Sencillo');
		$builder->add('Full');
		$builder->add('Importacion');
		$builder->add('Exportacion');
		$builder->add('Reutilizado');
		$builder->add('WorkOrder');
		$builder->add('Booking');
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