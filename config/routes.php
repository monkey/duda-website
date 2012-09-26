<?php
/* SVN FILE: $Id: routes.php 7945 2008-12-19 02:16:01Z gwoo $ */
/**
 * Short description for file.
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different urls to chosen controllers and their actions (functions).
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) :  Rapid Development Framework (http://www.cakephp.org)
 * Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright     Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 * @link          http://www.cakefoundation.org/projects/info/cakephp CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.app.config
 * @since         CakePHP(tm) v 0.2.9
 * @version       $Revision: 7945 $
 * @modifiedby    $LastChangedBy: gwoo $
 * @lastmodified  $Date: 2008-12-18 18:16:01 -0800 (Thu, 18 Dec 2008) $
 * @license       http://www.opensource.org/licenses/mit-license.php The MIT License
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/views/pages/home.ctp)...
 */
	Router::connect('/', array('controller' => 'home', 'action' => 'index'));
	Router::connect('/about', array('controller' => 'home', 'action' => 'about'));
	Router::connect('/download', array('controller' => 'home', 'action' => 'download'));
	Router::connect('/community', array('controller' => 'home', 'action' => 'community'));
	Router::connect('/documentation', array('controller' => 'documentation', 'action' => 'index'));
	Router::connect('/developers', array('controller' => 'home', 'action' => 'developers'));
/**
 * ...and connect the rest of 'Pages' controller's urls.
 */
	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));
	Router::connect('/documentationdev/*', array('controller' => 'documentationdev', 'action' => 'display'));
	Router::connect('/maintainance', array('controller' => 'home', 'action' => 'maintainance'));
	Router::connect('/GSoC2010/*', array('controller' => 'gsoc2010', 'action' => 'display'));
	Router::connect('/Announcements/*', array('controller' => 'announcements', 'action' => 'display'));
	Router::connect('/GSoC2010/Welcome', array('controller' => 'gsoc2010', 'action' => 'welcome'));
	Router::connect('/Donate', array('controller' => 'home', 'action' => 'donate'));
	Router::connect('/donate', array('controller' => 'home', 'action' => 'donate'));
        Router::connect('/Embedded', array('controller' => 'home', 'action' => 'embedded'));
        Router::connect('/flisol2010', array('controller' => 'pages', 'action' => 'flisol'));

?>
