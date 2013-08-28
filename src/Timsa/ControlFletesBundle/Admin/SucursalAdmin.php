<?php
# Falta implementar la relacion con la tarifa
namespace Timsa\ControlFletesBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class SucursalAdmin extends Admin{
		/**
		 * @param \Sonata\AdminBundle\Datagrid\ListMapper $listMapper
		 *
		 * @return void
		 */
		protected function configureListFields(ListMapper $listMapper)
		    {
		        $listMapper
		            ->add('nombre')
		            ->add('email')
		            ->add('calle')
		            ->add('numero')
		            ->add('colonia')
		            ->add('localidad')
		            ->add('ciudad')
		            ->add('estado')
		            ->add('telefono')
		            ->add('statusA')
		            ->add('fechaIngreso')
		            ->add('fechaDeprecated')
		            ->add('cliente')
		            ->add('tarifas')
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
	            	->add('cliente')
		            ->add('nombre')
		            ->add('email')
		            ->add('calle')
		            ->add('numero')
		            ->add('colonia')
		            ->add('localidad')
		            ->add('ciudad')
		            ->add('estado')
		            ->add('telefono')
		            ->add('statusA')
		            ->add('fechaIngreso')
		            ->add('tarifas')
	            ->end()
	            #->with('Roles')
	            #	->add('roles', 'sonata_type_model',array('expanded' => true, 'compound' => true, 'multiple' => true))
	            #->end()
	            ;
	        }
}