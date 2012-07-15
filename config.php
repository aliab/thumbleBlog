<?php

// Route URL to controller and view
  $routes = array(
			array('url'=>'/^posts\/(?P<id>\d+)$/','controller'=>'posts','view'=>'show'),
			array('url'=>'/^posts\/(?P<id>\d+)\/edit$/','controller'=>'posts','view'=>'edit'),
			array('url'=>'/^posts\/new$/','controller'=>'posts','view'=>'new'),
			array('url'=>'/^posts\/create$/','controller'=>'posts','view'=>'create')	
  );
  
// DATABSE Connection params
  define('HOST','localhost');
  define('USERNAME','root');
  define('PASSWORD','');
  define('DATABASE','thumblelog');

// Server ROOT
  define('SERVER_ROOT',$_SERVER['DOCUMENT_ROOT']);

// Application Directory
  define('APP_ROOT','learn-php/php-scratch');

// Directory Structure
  define('DS','/');

// MVC Path
  define('MODEL_PATH',SERVER_ROOT.DS.APP_ROOT.DS.'models'.DS);
  define('CONTROLLER_PATH',SERVER_ROOT.DS.APP_ROOT.DS.'controller'.DS);
  define('VIEW_PATH',SERVER_ROOT.DS.APP_ROOT.DS.'view'.DS);
  
// include libs

include('database.php');


?>