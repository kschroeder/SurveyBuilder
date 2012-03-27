<?php

namespace SocialMediaAuth\Auth;

use Zend\Http\Request;

abstract class AuthAdapter
{
	
	protected $request;
	protected $settings;
	protected $messages = array();
	
	public function setRequest(Request $request)
	{
		$this->request = $request;
	}
	
	public function getErrorMessages()
	{
		return $this->messages;
	}
	
	public function addErrorMessage($message)
	{
		$this->messages[] = $message;
	}
	
	public function setSettings(array $settings)
	{
		$this->settings = $settings;
	}
	
	public function getSettings()
	{
		return $this->settings;
	}
	
	public abstract function getName();
	public abstract function getImageUrl();
	public abstract function isValidLogin();
	public abstract function handleInitialRequest();
	
}