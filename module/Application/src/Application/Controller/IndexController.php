<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
//use Application\Service\UsuarioService;
use Curso\Service\UsuarioService;


class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        echo "Hola Mundo";
    	return new ViewModel();
    }
    
    public function holaAction()
    {
		
    	$usuario = $this->getServiceLocator()->get('Curso\Service\UsuarioService');
    	$usuario->testDB();
    	
    	$usuario->setNombre("Manuel");
    	$usuario->setApellidoPaterno('Zapata');
    	$usuario->setApellidoMaterno('Encalada');
    	
    	echo get_class($usuario);
    	
    	//$adapter = $this->getServiceLocator()->get('Zend\Db\Adapter\Adapter');
    	
    /*	 $adapter = new \Zend\Db\Adapter\Adapter(array(
    			'driver' => 'Mysqli',
    			'host'  => '127.0.0.1',
    			'database' => 'hola',
    			'username' => 'root',
    			'password' => '',
    			'options'=> array('buffer_results'=> true)
    	)); */
/*
    	$result = $adapter->query('SELECT * FROM `user` WHERE `id` = ?', array(5));
    	
    	echo get_class($result).' <bl />';
    	
    	$data = $result->current();
    	
    	print_r($data);
    
    	//$usuario = this->getServiceLocator()
    
	  $usuario = new UsuarioService();
	  $usuario->setnombre("Ing. Manuel");
	  $usuario->setApellidoPaterno(' Zapata');
	  $usuario->setApellidoMaterno(' Encalada');
	  
	  echo get_class($usuario);
	*/  
	 $parametros['nombre'] = 'Manuel Abraham Zapata Encalada';
	 $parametros['objeto_usuario'] = $usuario; 
    	
     return new ViewModel($parametros);
	  
	  
    }
}
