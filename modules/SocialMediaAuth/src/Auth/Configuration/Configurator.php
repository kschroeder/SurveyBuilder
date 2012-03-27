<?php
namespace SocialMediaAuth\Auth\Configuration;

interface Configurator
{
	public function getActiveAuthAdapters();
	public function addAuthAdapter($name);
	public function removeAuthAdapter($name);
}
