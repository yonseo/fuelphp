<?php
/**
 * Fuel is a fast, lightweight, community driven PHP 5.4+ framework.
 *
 * @package    Fuel
 * @version    1.8.1
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2018 Fuel Development Team
 * @link       http://fuelphp.com
 */

/**
 * NOTICE:
 *
 * If you need to make modifications to the default configuration, copy
 * this file to your app/config folder, and make them in there.
 *
 * This will allow you to upgrade fuel without losing your custom config.
 */

return array(
    'driver'                 => 'SimpleAuth',
    'verify_multiple_logins' => false,
    'salt'                   => 'k92d#ekJ7@aTuZm0$@1uK0kSxUFXfuaOK$2ydO+KfvZsQ|2lB8g0s',
    'iterations'             => 10000,
);


