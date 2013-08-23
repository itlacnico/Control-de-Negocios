<?php

namespace Timsa\ControlFletesBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class UserAdmin extends Admin{
	/**
	 * @param \Sonata\AdminBundle\Datagrid\ListMapper $listMapper
	 *
	 * @return void
	 */
	protected function configureListFields(ListMapper $listMapper)
	    {
	        $listMapper
	            ->add('username')
	            ->add('password')
	            ->add('email')
	            ->add('_action', 'actions', array(
	                'actions' => array(
	                    'edit' => array(),
	                )))
	        ;
	    }

	    /**
	     * @param \Sonata\AdminBundle\Form\FormMapper $formMapper
	     *
	     * @return void
	     */

    protected function configureFormFields(FormMapper $formMapper)
        {

            $formMapper
            ->with('General')
            	->add('username')
            	->add('password')
            	->add('email')
            ->end();
           # ->with('Roles')
            #	->add('roles', 'sonata_type_model', array('expanded' => true,  'multiple' => true,  ) )
            #->end();
        }
/*
'roles', 'sonata_type_model',array('expanded' => true, , 'multiple' => true)

        'roles', 'collection', array(
                'type'      => new Role(),
                'prototype' => true,
                'allow_add' => true,
                'allow_delete' => true,
                'options' => array('data_class' => 'Timsa\ControlFletesBundle\Entity\Role'),

*/
}