<?php
/*
 * @version		$Id: mod_joomlafeedreader.php 2012-06-03 08:50:06 $
 * @package		Joomla Feed Reader
 * @author		Lam Dang Tung
 * @copyright	Copyright (c) 2012, Lam Dang Tung
 * @license		GNU/GPL, see COPYING  
 * 
 * This file is part of Joomla Feed Reader.
 * 
 * Joomla Feed Reader is a Joomla! Module
 */

//no direct access
defined('_JEXEC') or die('Restricted access');

// Include the syndicate funcions only once
require_once(dirname(__FILE__).DS.'helper.php');

JFeedReader::init($params);

$jFeed = JFeedReader::getContent();

require(JModuleHelper::getLayoutPath('mod_joomlafeedreader'));

?>