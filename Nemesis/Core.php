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

class Nemesis_Core {

    /**
     * @var null|string Nemesis version
     */
    public $version = null;

    /**
     * @var null|string Nemesis codename
     */
    public $codename = null;

    /**
     * @var bool Error status
     */
    protected $_error   = false;

    /**
     * @var false|Nemesis_Core
     */
    private static $_instance  = false;

    /**
     * @var null|Nemesis_Log_File
     */
    protected $log = null;


    /**
     * __construct
     *
     * The public constructor solves
     * the multiple inheritance problem.
     * By default all classes derive from
     * Nemesis_Core. But this does not work
     * if the class is already in an inheritance
     * tree. So we also provide a "singleton"
     *
     * @access public
     */
    public function __construct() {}

    /**
     * instance
     *
     * @access public
     * @static
     * @return Nemesis_Core
     */
    public static function &instance() {
        if(!self::$_instance) {
            self::$_instance = new Nemesis_Core();
        }
        return self::$_instance;
    }

    /**
     * setup
     *
     * @access public
     * @param string $version
     * @param string $codename
     */
    public function setup($version, $codename) {

        $this->version     = $version;
        $this->codename    = $codename;

        // Make sure that nemesis is run in CLI
        // Set error level
        // Register exception and error handler
        // Instantiate output
        // Load Configuration
        // Load Logger
    }

    /**
     * run
     *
     * @access public
     */
    public function run() {

        // Enter main loop
        while($this->_error === false) {

            // Get all online players
            // Execute plugins: $plugin->run()

            // sleep($config->general->refresh_rate);
        }

    }

    /**
     * shutdown
     *
     * @access public
     */
    public function shutdown() {

        // Restore autoloader
        Nemesis_Loader_Autoload::unregister();

        // Disconnect from rcon

        // Disconnect from ftp

    }
}

// End of file: ./Nemesis/Core.php