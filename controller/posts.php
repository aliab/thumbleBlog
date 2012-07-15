<?php

include(MODEL_PATH.'post.php');

switch($route['view']){
	case 'show':
		$post = find_post($params['id']);
		break;
	case 'new':
		break;
	case 'create':
		break;
}


?>