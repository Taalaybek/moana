<?php

/**
  * Default example controller
  *
  * @package Moana
  * @subpackage DefaultController
  * @category Custom controller
  * @author Alex Bowey, https://github.com/Taalaybek
  * @link https://github.com/Taalaybek/moana/wiki
  */

		namespace application\controllers;
		use application\core\Controller;

		class DefaultController extends Controller
		{

			/**
        * Index Page for this controller.
        * Maps to the following URL:
        *             https://example.com/
        * Since this controller is set as the default controller in
        * config/routes.php, it's displayed at http://example.com/
        * @method indexAction
        * @version 1.0.0
        */
					public function indexAction()
					{
						$this->view->render("Home page");
					}

		}
