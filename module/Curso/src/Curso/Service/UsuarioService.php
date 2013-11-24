<?php

namespace Curso\Service;

use Application\Service\UsuarioInterface;
use Zend\ServiceManager\ServiceManagerAwareInterface;
use Zend\ServiceManager\ServiceManager;



//class UsuarioService implements UsuarioInterface {
class UsuarioService implements ServiceManagerAwareInterface{
	
	//protected $serviceLocator;
	
	protected $nombre;
	protected $apellidoPaterno;
	protected $apellidoMaterno;
	/**
	 * @return the $nombre
	 */
	/* public function getNombre() {
		return $this->nombre;
	}*/

	public function setServiceManager(ServiceManager $serviceManager){
		$this->sm = $serviceManager;
	} 
	public function getServiceManager(){
		return $this->sm;
	}
	
	public function testDB(){
		$adapter = $this->getServiceManager()->get('Zend\Db\Adapter\Adapter');
		
		$result = $adapter->query('SELECT * FROM user WHERE Id=?', array(5));
				
		echo get_class($result). '<br />';
		
		$data = $result->current();
		
		print_r($data);
		}
	
	
	
	public function getNombre() {
		return $this->nombre.' '.$this->apellidoPaterno .''.$this->apellidoMaterno;
	}
	
	/**
	 * @return the $apellidoPaterno
	 */
	public function getApellidoPaterno() {
		return $this->apellidoPaterno;
	}

	/**
	 * @return the $apellidoMaterno
	 */
	public function getApellidoMaterno() {
		return $this->apellidoMaterno;
	}

	/**
	 * @param field_type $nombre
	 */
	public function setNombre($nombre) {
		$this->nombre = $nombre;
	}

	/**
	 * @param field_type $apellidoPaterno
	 */
	public function setApellidoPaterno($apellidoPaterno) {
		$this->apellidoPaterno = $apellidoPaterno;
	}

	/**
	 * @param field_type $apellidoMaterno
	 */
	public function setApellidoMaterno($apellidoMaterno) {
		$this->apellidoMaterno = $apellidoMaterno;
	}

	
}
