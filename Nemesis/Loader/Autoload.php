<?php
/**
 * Nemesis Admin
 *
 * LICENSE
 *
 * Nemesis is a free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published
 * by the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Nemesis is distributed in the hope that it will be useful, but
 * WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY
 * or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License
 * for more information.
 *
 * You should have received a copy of the GNU General Public License
 * along with Nemesis. If not, see <http://www.gnu.org/licenses/>
 *
 * @copyright Copyright (c) 2012 TrueByte.in
 * @license http://www.gnu.org/licenses/gpl-3.0
 * @author Lukas Jarosch <lukas@truebyte.in>
 */

class Nemesis_Loader_Autoload {

    /**
     * register
     *
     * @access public
     * @static
     */
    public static function register() {
        spl_autoload_register(array('Nemesis_Loader_Autoload', 'autoload'));
    }

    /**
     * unregister
     *
     * @access public
     * @static
     */
    public static function unregister() {
        spl_autoload_unregister(array('Nemesis_Loader_Autoload', 'autoload'));
    }

    /**
     * autoload
     *
     * Nemesis uses virtual namespaces
     * to organize the classes.
     * Every underscore is converted into
     * a directory separator.
     *
     * @example: Nemesis_Loader_Autoload => Nemesis/Loader/Autoload.php
     *
     * @access public
     * @static
     * @param string $class
     */
    public static function autoload($class) {

        $path = BASE_PATH . str_replace('_', DIRECTORY_SEPARATOR, $class) . PHP;

        if(file_exists($path)) {
            require $path;
            return;
        }

        throw new Nemesis_Loader_Exception('Unable to load class `' . $class . '`', E_WARNING);
    }

}

// End of file: ./Nemesis/Loader/Autoload.php