<?php

namespace Craft;

class HappyRobWidget extends BaseWidget
{
	protected $omg_so_handsome = 'http://cl.ly/image/2H0G0I261d2S/happyrob.jpg';
	// HAHAHAHA OMG_SO_HANDSOME

	public function getName()
	{
		return Craft::t('CaptainRob');
	}

	public function getBodyHtml()
	{
		return '<img src="' . $this->omg_so_handsome . '" alt="OMG so handsome" width="100%">';
	}
}
