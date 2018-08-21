<?php
/**
	* Array contains routes's names
	*
	* @package Moana
	* @subpackage routes config file
	* @category config file
	* @author Alex Bowey, https://github.com/Taalaybek
	* @link https://github.com/Taalaybek/moana/wiki
	*/
		return [
			'' => [
				'controller' => 'default',
				'action' => 'index'
			],

			'account/login' => [
				'controller' => 'account',
				'action' => 'login'
			],

			'register' => [
				'controller' => 'account',
				'action' => 'register'
			]
		];
