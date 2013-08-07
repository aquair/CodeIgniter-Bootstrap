<?php

/*
 * Specify menuitems:
 * name and url
 */

$config['menubar']['items'] = array(
	array('name' => 'Home', 'url' => ''),
	array('name' => 'About', 'url' => 'about'),
	array('name' => 'Dropdown', 'items' =>
		array(
			array('name' => 'Item 1', 'url' => 'dropdown/1'),
			array('name' => 'Item 2', 'url' => 'dropdown/2')
		)
	)
);