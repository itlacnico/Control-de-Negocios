<?php

namespace Timsa\ControlFletesBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class EconomicoAdmin extends Admin{
	/**
	 * @param \Sonata\AdminBundle\Datagrid\ListMapper $listMapper
	 *
	 * @return void
	 */
		protected function configureListFields(ListMapper $listMapper)
		    {
		    	
		        $listMapper
		        	->add('numero')
		            ->add('placas')
		            ->add('statusA')
		            ->add('fechaIngreso')
		            ->add('fechaSalida')
		            ->add('numeroSerie')
		            ->add('modelo')
		            ->add('transponder')
		            ->add('marca')
		            ->add('tipoVehiculo')
		            ->add('actividad')
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
	            		->add('numero')
			            ->add('placas')
			            #->add('statusA')
			            ->add('fechaIngreso')
			            #->add('fechaSalida')
			            ->add('numeroSerie')
			            ->add('modelo')
			            ->add('transponder')
			            ->add('marca')
			            ->add('tipoVehiculo')
	            ;
	            
	        }

        protected function configureDatagridFilters(DatagridMapper $datagrid)
            {
                $datagrid
                    ->add('numero', 'doctrine_orm_number')
                    ->add('placas', 'doctrine_orm_string')
                    #->add('numero', null, array(), null, array('expanded' => true, 'multiple' => true))
                ;
            }
}