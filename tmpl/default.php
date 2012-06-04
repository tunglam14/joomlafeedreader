<?php
/*
 * @version		$Id: default.php 2012-06-03 08:50:06 $
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

//We need mootools for fix png in IE

JHTML::_('behavior.mootools');
        
$doc = &JFactory::getDocument();
$doc->addStyleSheet( JURI::base() . 'modules/mod_joomlafeedreader/tmpl/mod_joomlafeedreader.css' );
?>

<p id="jFeedReader_name"><?php echo "From: ".$params->get('rssname');?> </p>
	<ul>
		<?php
			$counter = 0;
			
			foreach($jFeed as $item){
				if($counter == $params->get('maxnumber'))
					break;
					
				$titles=$item->getElementsByTagName('title');//lay cac element co tag name la title va gan vao bien $titles 
				$title=$titles->item(0);//lay ra gia tri dau tien trong array $titles 
		
				$links=$item->getElementsByTagName('link'); 
				$link=$links->item(0);
			?>
			<li>
				<a href="<?php echo $link->nodeValue ?>" target="_blank"> <?php echo $title->nodeValue ?> </a>
			</li>
			<?php
			$counter++;
			}
		 ?>
	</ul>