<?php

namespace Timsa\ControlFletesBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class SelloAdmin extends Admin{
	protected function configureListFields(ListMapper $listMapper){
		$listMapper
			    ->add('sello')
	        	->add('numero_sello')
	        	->add('workorder')
	        	->add('fecha_sellado')
			// add custom action links
          ->add('_action', 'actions', array(
              'actions' => array(
                  'edit' => array(),
              )))
		;
	}

	protected function configureFormFields(FormMapper $formMapper)
	    {
	        $formMapper
	        	->add('sello')
	        	->add('numero_sello')
	        	//->add('workorder')
	        	->add('fecha_sellado')
				#->add('imagen')
	        ;
	    }
}