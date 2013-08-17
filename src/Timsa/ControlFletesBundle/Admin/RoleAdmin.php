<?php

namespace Timsa\ControlFletesBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class RoleAdmin extends Admin{
	protected function configureListFields(ListMapper $listMapper)
	    {
	        $listMapper
	            ->add('name')
	            ->add('role')
	        ;
	    }

    protected function configureFormFields(FormMapper $formMapper)
        {
            $formMapper
            ->with('General')
                ->add('name')
                ->add('role')
    		->end()
            ;
        }
}