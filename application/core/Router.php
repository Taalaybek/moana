<?php
/**
 * Moana
 *
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
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NON INFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package Moana
 * @author Alex Bowey
 * @copyright Copyright (c) 2018, Alex Bowey
 * @license http://opensource.org/licenses/MIT	MIT License
 * @link https://themoana.000webhostapp.com/ Home page / GitHub https://github.com/Taalaybek/moana
 * @version 1.0.0
 *
 */

/**
 * Router core library for management url addresses
 *
 * @package Moana
 * @subpackage Router
 * @category Core library
 * @author Alex Bowey, https://github.com/Taalaybek
 * @link https://github.com/Taalaybek/moana/wiki
 */

namespace application\core;

class Router
{
  
  /**
   * Routes's names
   * @var array
   */
  protected $routes = [];
  
  /**
   * Routes's params
   * @var array
   */
  protected $params = [];
  
  /**
   *  Class's constructor
   */
  public function __construct()
  {
    $arr = require 'application/config/routes.php';
    
    foreach ($arr as $key => $val) {
      $this->add($key, $val);
    }
    $this->run();
  }
  
  /**
   *  Add new route method
   * @param string $route
   * @param string $params
   * @return void
   */
  public function add($route, $params)
  {
    $route = "#^" . $route . "$#";
    $this->routes[$route] = $params;
  }
  
  /**
   *  Verify routes method
   * @return boolean
   */
  public function verify()
  {
    $url = trim($_SERVER['REQUEST_URI'], '/');
    
    foreach ($this->routes as $route => $params) {
      if (preg_match($route, $url, $coincidence)) {
        $this->params = $params;
        return true;
      }
    }
    return false;
  }
  
  /**
   *  Run methods method
   * @return void
   */
  public function run()
  {
    if ($this->verify()) {
      $path = 'application\controllers\\' . ucfirst($this->params['controller']) . "Controller";
      
      if (class_exists($path)) {
        $action = $this->params['action'] . 'Action';
        if (method_exists($path, $action)) {
          $controller = new $path($this->params);
          $controller->$action();
        }
      } else {
        echo "error " . $path;
      }
      
    } else {
      echo "Wrong itinerary of web-site";
    }
  }
}

;
