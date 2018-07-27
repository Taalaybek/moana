<?php 
/**
  * Custom example controller
  *
  * @package Moana
  * @category Custom controller
  * @author Alex Bowey, https://github.com/Taalaybek
  * @link https://github.com/Taalaybek/moana/wiki
  */

		namespace application\controllers;
		use application\core\Controller;

		class AccountController extends Controller
		{
			
			public function loginAction()
			{
				debug($this->route);
			}

			public function registerAction()
			{
				debug($this->route);
			}
		}
