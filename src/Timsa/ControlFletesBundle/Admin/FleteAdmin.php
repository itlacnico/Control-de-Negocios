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
		            ->add('relacion')
		            ->add('fecha_facturacion')
		            ->add('agencia')
		            ->add('fletePadre')
		            ->add('fleteHijo')
		            ->add('sucursal')
		            ->add('cuota')
		            ->add('tipo_viaje')
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
	                ->add('actividad')
	                ->add('statusA')
	                ->add('comentarios')
	                ->add('fecha')
	                ->add('fecha_facturacion')
	            ->end()
	            ->with('Relacion')
	            	->add('relacion','sonata_type_model' , array('expanded' => true, 'compound' => true))
	            ->end()
	            ->with('Viajes')
	            	->add('agencia')
	            	->add('sucursal')
	            	->add('cuota')
	            	->add('tipo_viaje')
	            ->end()
	            ->with('Relaciones con fletes')
	            	->add('fletePadre')
	            	->add('fleteHijo')
	            ->end()
	            ;
	            
	        }
}