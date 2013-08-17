<?php

namespace Timsa\ControlFletesBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class SocioAdmin extends Admin{
	protected function configureListFields(ListMapper $listMapper)
	    {
	        $listMapper
	            ->add('nombre')
	            ->add('telefono')
	            ->add('statusA')
	            ->add('fechaIngreso')
	            ->add('imagen')
	            ->add('_action', 'actions', array(
	                'actions' => array(
	                    'edit' => array(),
	                )))
	        ;
	    }

    protected function configureFormFields(FormMapper $formMapper)
        {
            $formMapper
            ->with('General')
                ->add('nombre')
                ->add('telefono')
                ->add('statusA', null, array('required' => false))
    			->add('fechaIngreso')
    			->add('imagen')
    		->end()
            ;
        }
}