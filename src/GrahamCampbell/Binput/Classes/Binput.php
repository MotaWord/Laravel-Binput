<?php namespace GrahamCampbell\Binput\Classes;

/**
 * This file is part of Laravel Binput by Graham Campbell.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @package    Laravel-Binput
 * @author     Graham Campbell
 * @license    Apache License
 * @copyright  Copyright 2013 Graham Campbell
 * @link       https://github.com/GrahamCampbell/Laravel-Binput
 */

use Illuminate\Http\Request;
use GrahamCampbell\Security\Facades\Security;

class Binput extends Request {

    /**
     * Get the specified input.
     *
     * @param  string  $key
     * @param  string  $default
     * @param  bool    $trim
     * @param  bool    $xss_clean
     * @return string
     */
    public function get($key, $default = null, $trim = true, $xss_clean = true) {
        $input = $this->all();

        if (is_null($key)) {
            return array_merge($input, $this->query());
        }

        $value = array_get($input, $key);

        if (is_null($value)) {
            return array_get($this->query(), $key, $default);
        }

        if ($trim === true) {
            $value = trim($value);
        }

        if ($xss_clean === true) {
            $value = Security::xss_clean($value);
        }

        return $value;
    }
}
