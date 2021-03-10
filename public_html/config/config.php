<?php

/**
 * Selected language
 */
global $selectedLang;
$selectedLang = 'ru';

/**
 * Root path to the application
 * 
 * @var string
 */
define('ROOT', $_SERVER['DOCUMENT_ROOT'] . '/');

/**
 * Path to templates
 * 
 * @var string
 */
define('TEMPLATES_DIR', ROOT . 'templates/');

/**
 * Application Template
 * 
 * @var string
 */
define('TEMPLATE', 'default/');
