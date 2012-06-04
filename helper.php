<?php
/*
 * @version		$Id: helper.php 2012-06-03 08:50:06 $
 * @package		Joomla Feed Reader
 * @author		Lam Dang Tung
 * @copyright	Copyright (c) 2012, Lam Dang Tung
 * @license		GNU/GPL, see COPYING  
 * 
 * This file is part of Joomla Feed Reader.
 * 
 * Joomla Feed Reader is a Joomla! Module
 */
 
class jFeedReader{
	function defines(){
		$this->_url = '';
	}
	
	function init(&$params){
		jFeedReader::defines();
		
		$this->_url = $params->get('rsssource');
	}

    function getContent(){
		$dom = new DOMDocument('1.0','utf-8');
		$dom->load($this->_url);
		$items = $dom->getElementsByTagName("item");
			return $items;
    }
}

?>