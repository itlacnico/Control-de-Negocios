<?php

namespace Timsa\ControlFletesBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class TarifaAgenciaAdmin extends Admin{
	
		/**
		 * @param \Sonata\AdminBundle\Datagrid\ListMapper $listMapper
		 *
		 * @return void
		 */
		protected function configureListFields(ListMapper $listMapper)
		    {
		        $listMapper
		        	->add('clasificacion')
		            ->add('statusA')
		            ->add('tarifa')
		            ->add('agencia')
		            ->add('cuota')
		            ->add('fecha_ingreso')
		            ->add('fecha_salida')
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
	            	->add('clasificacion')
		            ->add('statusA')
		            ->add('tarifa')
		            ->add('agencia')
		            ->add('cuota')
	            ->end()
	            #->with('Roles')
	            #	->add('roles', 'sonata_type_model',array('expanded' => true, 'compound' => true, 'multiple' => true))
	            #->end()
	            ;
	        }

	    protected function configureDatagridFilters(DatagridMapper $datagrid)
	        {
	            $datagrid
	                ->add('agencia.nombre', 'doctrine_orm_string')
	                ->add('tarifa.nombre', 'doctrine_orm_string')
	                ->add('cuota.nombre', 'doctrine_orm_string')
	                #->add('numero', null, array(), null, array('expanded' => true, 'multiple' => true))
	            ;
	        }
}