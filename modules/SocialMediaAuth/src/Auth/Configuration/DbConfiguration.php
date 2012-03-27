<?php

namespace SocialMediaAuth\Auth\Configuration;

use Zend\Db\Adapter\AdapterAwareInterface;

use SocialMediaAuth\Auth\Configuration\Configurator;

class DbConfiguration implements Configurator, AdapterAwareInterface
{
	/**
	 * 
	 * @var Zend\Db\Adapter\Adapter
	 */
	protected $adapter;
	protected $table = 'activated_auth';
	
	public function setDbAdapter(Adapter $adapter)
	{
		$this->adapter = $adapter;
	}
	
	public function setTable($table)
	{
		$this->table = (string)$table;
	}
	
	public function addAuthAdapter($name)
	{
	
	}

	public function getActiveAuthAdapters() {
		// TODO Auto-generated method stub
		}

	public function removeAuthAdapter($name) {
		// TODO Auto-generated method stub
		}


}