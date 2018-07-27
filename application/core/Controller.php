<?php 
/**
  * An open source application development framework for PHP
  * This content is released under the MIT License (MIT)
  * Copyright (c) 2018, Kyrgyzstan, Bishkek, Alex Bowey
  *
  * Permission is hereby granted, free of charge, to any person obtaining a copy
  * of this software and associated documentation files (the "Software"), to deal
  * in the Software without restriction, including without limitation the rights
  * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
  * copies of the Software, and to permit persons to whom the Software is
  * furnished to do so, subject to the following conditions:
  *
  * The above copyright notice and this permission notice shall be included in
  * all copies or substantial portions of the Software.
  *
  * @package Moana
  * @author Alex Bowey
  * @copyright Copyright (c) 2018, Eshenov Taalaybek
  * @license http://opensource.org/licenses/MIT MIT License
  * @link https://themoana.000webhostapp.com/ Home page / GitHub https://github.com/Taalaybek/moana
  * @version 1.0.0
  *
  */

/**
  * Main core controller. Abstract class
  *
  * @package Moana
  * @category Core controller
  * @author Alex Bowey, https://github.com/Taalaybek
  * @link https://github.com/Taalaybek/moana/wiki
  */
  
    namespace application\core;

    abstract class Controller
    {
      
      /**
        * $Route property contains in itself $route variable gear from construct
        * @param empty property
        */
          public $route;

      /**
        * Class constructor
        * @method's load routes config, library, take down new routes in to add method
        * @version 1.0.0
        */
          public function __construct($route)
          {
            $this->route = $route;
          }
    }