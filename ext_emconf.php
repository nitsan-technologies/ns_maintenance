<?php

$EM_CONF[$_EXTKEY] = array(
    'title' => '[NITSAN] Maintenance Mode',
    'description' => 'Do you want to make your site temporary offline like coming soon and maintenance mode? This extension will help you with simple plug & play to your TYPO3 instance. You can download PRO version with more-features & free-support at https://t3terminal.com/nitsan-maintenance-pro',
    'category' => 'plugin',
    'author' => 'T3:Bhavin Barad, T3:Keval Pandya, QA:Siddharth Sheth',
	'author_email' => 'sanjay@nitsan.in',
	'author_company' => 'NITSAN Technologies Pvt Ltd',
    'state' => 'stable',
    'uploadfolder' => false,
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '4.0.0',
    'constraints' => array(
        'depends' => array(
            'typo3' => '6.2.0-9.5.99',
        ),
        'conflicts' => array(
        ),
        'suggests' => array(
        ),
    ),
    'clearcacheonload' => false,
);
