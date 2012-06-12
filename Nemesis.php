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

require './Nemesis/Constants.php';

require NEMESIS_PATH . 'Loader/Autoload.php';
Nemesis_Loader_Autoload::register();

$nemesis = Nemesis_Core::instance();
$nemesis->setup('0.0.1', 'Andromeda');

$log = new Nemesis_Log_File();
$log->test();

sleep(12123);

// End of file: ./Nemesis.php