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
 * @license http://opensource.org/licenses/MIT MIT License
 * @link https://themoana.000webhostapp.com/ Home page / GitHub https://github.com/Taalaybek/moana
 * @version 1.0.0
 *
 */

/**
 * View core library
 *
 * @package Moana
 * @category core view library
 * @author Alex Bowey, https://github.com/Taalaybek
 * @link https://github.com/Taalaybek/moana/wiki
 */

namespace application\core;

class View
{
  
  /**
   * Current route information
   * @var array
   */
  public $route;
  
  /**
   * Contains path of current layout made with route's params
   * @var string
   */
  public $path;
  
  /**
   * Contains default layout name
   * @var string
   */
  public $layout = 'default';
  
  /**
   * Default view's path
   * @var string
   */
  private $VIEWS_PATH = 'application/views/';
  
  /**
   * Class constructor
   */
  public function __construct($route)
  {
    $this->route = $route;
    $this->path = $this->route['controller'] . '/' . $this->route['action'];
  }
  
  /**
   * Render method
   * @method render()
   * @param $title string
   * @param $vars array
   */
  public function render($title, $vars = [])
  {
    // Passed elements of array as variables in to view layouts
    extract($vars);
    
    if (file_exists($this->VIEWS_PATH . $this->path . '.php')) {
      ob_start();
      require $this->VIEWS_PATH . $this->path . '.php';
      $content = ob_get_clean();
      require $this->VIEWS_PATH . 'layouts/' . $this->layout . '.php';
    }
  }
}
