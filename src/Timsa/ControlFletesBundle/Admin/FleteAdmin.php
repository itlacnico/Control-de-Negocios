<?php

namespace Timsa\ControlFletesBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class FleteAdmin extends Admin{
	/**
	 * @param \Sonata\AdminBundle\Datagrid\ListMapper $listMapper
	 *
	 * @return void
	 */
		protected function configureListFields(ListMapper $listMapper)
		    {
		    	
		        $listMapper
		        	->add('fecha')
		            ->add('actividad')
		            ->add('statusA')
		            ->add('comentarios')
		            ->add('fecha')
		            ->add('fecha_facturacion')
		            ->add('agencia')
		            ->add('operador')
		            ->add('economico')
		            ->add('socio')
		            ->add('fletePadre')
		            ->add('fleteHijo')
		            ->add('sucursal')
		            ->add('cuota')
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
	            	->add('fecha')
	                ->add('actividad')
	                ->add('statusA')
	                ->add('comentarios')
	                ->add('fecha')
	                ->add('fecha_facturacion')
	                ->add('agencia')
	                ->add('operador')
	                ->add('economico')
	                ->add('socio')
	                ->add('fletePadre')
	                ->add('fleteHijo')
	                ->add('sucursal')
	                ->add('cuota')
	            ;
	            
	        }
}