<?php
/**
  * Example model
  *
  * @package Moana
  * @subpackage DefaultController
  * @category Custom controller
  * @author Alex Bowey, https://github.com/Taalaybek
  * @link https://github.com/Taalaybek/moana/wiki
  */
    namespace application\models;
    use application\core\Model;

    class CustomModel extends Model
    {
      /**
        * property for use lib
        * @var object
        */
          public $example;

      /**
        * CustomModel constructor.
        * @return void
        */
          public function __construct()
          {
            parent::__construct();
            $this->example = $this->load_library('Example');
            // $this->example->output();
          }
    }
