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

// Path Constants
define('BASE_PATH', dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR);
define('NEMESIS_PATH',   BASE_PATH . 'Nemesis'    . DIRECTORY_SEPARATOR);
define('PLUGINS_PATH',  BASE_PATH . 'Plugins'   . DIRECTORY_SEPARATOR);
define('LOG_PATH',      BASE_PATH . 'Logs'      . DIRECTORY_SEPARATOR);
define('LANGUAGE_PATH', BASE_PATH . 'Language'  . DIRECTORY_SEPARATOR);
define('CONFIG_PATH',   BASE_PATH . 'Config'    . DIRECTORY_SEPARATOR);

// File Extensions
define('PHP',   '.php');
define('INI',   '.ini');
define('LANG',  '.lng');


// End of file: ./Constants.php