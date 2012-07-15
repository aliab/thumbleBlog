<?php

/**
 * connect and select database
 * @return (bool) resource
 */
function db_connection(){
	$con = @mysql_connect(HOST,USERNAME,PASSWORD);
	if(!$con){
		return false;
	}
	if(!mysql_select_db(DATABASE,$con)){
		return false;
	}
	return $con;
}

/**
 * turn mysql resource into array
 * @params resource $resault
 * @return array
 */

function result_to_array($result){
	$result_array = array();
	for($i=0; $row = mysql_fetch_array($result) ;$i++){
		$result_array[$i] = $row;
	}
	return $result_array;
}

?>