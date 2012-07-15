<?php

// includeing config file
// if you change app directory
// please touch 'config.php' at the root
include('config.php');

function dispatcher($routes){

	
	// Requested URL
	$url = $_SERVER['REQUEST_URI'];
	
	// Remove Application Address ROOT from URL
	$url = str_replace('/'.APP_ROOT.'/','',$url);
	
	// hold the name captured
	$params = parse_params();
	
	// removes query string from url we dont need any more that affects on $route
	$url = str_replace('?'.$_SERVER['QUERY_STRING'],'',$url);
	
	// become true if route['url'] matches url
	$route_match = false;
	
	// loops over routes looking for a match url
	foreach($routes as $urls => $route)
	{	
		// if match found append $matches to $params
		// set $route_match to true and exit the loop.
		if(preg_match($route['url'],$url,$matches))
		{
			$params = array_merge($params,$matches);
			$route_match = true;
			break;	
		}
	}
	// if no route found, display error
	if(!$route_match){ exit('No Route Found'); };
	
	// include controller
	include(CONTROLLER_PATH.$route['controller'].'.php');
	
	if(file_exists(VIEW_PATH.'layouts'.DS.$route['controller'].'.php')){
		// include template ( layout )
	    include(VIEW_PATH.'layouts'.DS.$route['controller'].'.php');
	}else{
		include(VIEW_PATH.'layouts'.DS.'application'.'.php');
	}
	
	
}

dispatcher($routes);

/**
 * return array of $_POST and $_GET
 * @return array
 */

function parse_params(){
	$params = array();
	
	if(!empty($_POST)){
		$params = array_merge($params,$_POST);
	}
	
	if(!empty($_GET)){
		$params = array_merge($params,$_GET);
	}
	
	return $params;
}


?>