<?php

namespace Craft;

class HappyRobPlugin extends BasePlugin
{
	public function getName()
	{
		 return Craft::t('HappyRob');
	}

	public function getVersion()
	{
		return '0.1.0';
	}

	public function getDeveloper()
	{
		return 'roberskine';
	}

	public function getDeveloperUrl()
	{
		return 'http://roberskine.com/';
	}
}
