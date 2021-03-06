<?php

namespace Timsa\ControlFletesBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class ContenedorAdmin extends Admin{
	protected function configureListFields(ListMapper $listMapper){
		$listMapper
			// add custom action links
		 ->add("codigo")
		 ->add("tipo")
		 ->add("")
          ->add('_action', 'actions', array(
              'actions' => array(
                  'edit' => array(),
              )))
		;
	}

	protected function configureFormFields(FormMapper $formMapper)
	    {
	        $formMapper
	        	->add("codigo")
	        	->add("tipo")
	        ;
	    }

    protected function configureDatagridFilters(DatagridMapper $datagrid)
        {
            #$datagrid
            #;
        }
}