<?php

$EM_CONF[$_EXTKEY] = array (
    'title' => 'Extend tt_address',
    'description' => 'New field in tt_address',
    'category' => 'plugin',
    'state' => 'alpha',
    'clearCacheOnLoad' => true,
    'version' => '1.0.0',
    'constraints' =>   array (
		'depends' => 
		array (
		  'typo3' => '9.5.0-10.4.99', 
		  'tt_address' => '5.2.0',
		),
		'conflicts' => 
		array (
		),
		'suggests' => 
		array (
		),
	),
);