<?php
// @todo figure out a way to put a representative icon here too

echo elgg_view_menu('river', array(
	'item' => $vars['item'],
	'class' => 'elgg-menu-hz',
	'sort_by' => 'priority',
));