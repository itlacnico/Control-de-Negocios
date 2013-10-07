<?php

namespace Timsa\ControlFletesBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class OperadorAdmin extends Admin{
	protected function configureListFields(ListMapper $listMapper){
		$listMapper
			->add('nombre')
			->add('telefono')
			->add('RC')
			->add('CURP')
			->add('fecha_ingreso')
			->add('statusA')
			#->add('imagen')
			->add('actividad')
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
	            ->add('nombre')
	            ->add('actividad')
	            ->add('statusA')
	            ->add('telefono')
	            #->add('statusA', null, array('required' => false))
	            ->add('RC')
				->add('CURP')
				->add('fecha_ingreso')
				->add('fecha_deprecated')
				#->add('imagen')
	        ;
	    }

    protected function configureDatagridFilters(DatagridMapper $datagrid)
        {
            $datagrid
                ->add('nombre', 'doctrine_orm_string')
                #->add('numero', null, array(), null, array('expanded' => true, 'multiple' => true))
            ;
        }
}