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
 * Main core model. Abstract class
 *
 * @package Moana
 * @category Core model
 * @author Alex Bowey, https://github.com/Taalaybek
 * @link https://github.com/Taalaybek/moana/wiki
 */

namespace application\core;

abstract class Model
{
  
  /**
   * Library loader
   * @param string $lib_name
   * @return object
   */
  public function load_library(string $lib_name)
  {
    $lib = "application\lib\\" . $lib_name;
    if (!class_exists($lib)) {
      echo "The " . $lib_name . " library was not found.";
    }
    return new $lib();
  }
}