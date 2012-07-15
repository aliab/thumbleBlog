<?php





/**
 * create Post
 * @params array
 * @return (bool)
 */

function create_post($params){
	$db_connection = db_connection();
	$query = sprintf("insert into posts set
								title='%s',
								body='%s',
								created_at=NOW(),
								user_id='%s'
								",
								mysql_real_escape_string($params['title']),
								mysql_real_escape_string($params['body']),
								mysql_real_escape_string($params['user_id']));
	
	$result = mysql_query($query);
	if(!$result){
		return false;
	}else{
		return true;
	}
}

/**
 * update Post
 * @params array
 * @return (bool)
 */

function update_post($params){
	$db_connection = db_connection();
	$query = sprintf("update posts set
									title='%s',
									body='%s',
									user_id='%s'
								  where id=%s
								",
								mysql_real_escape_string($params['title']),
								mysql_real_escape_string($params['body']),
								mysql_real_escape_string($params['user_id']),
								mysql_real_escape_string($params['id'])
								);
	
	$result = mysql_query($query);
	if(!$result){
		return false;
	}else{
		return true;
	}
}

/**
 * delete Post
 * @params int
 * @return (bool)
 */

function delete_post($id){
	$db_connection = db_connection();
	$query = sprintf("delete from posts where id=%s",mysql_real_escape_string($id));
	$result = mysql_query($query);
	if(!$result){
		return false;
	}else{
		return true;
	}
}

/**
 * returns array of posts from database
 * @return array
 */

function find_posts(){
	$db_connection = db_connection();
	$query = 'select posts.title, posts.body,posts.user_id, users.username from posts, users where posts.user_id = users.id';
	$result = mysql_query($query);
	$number_of_posts = mysql_num_rows($result);
	if($number_of_posts == 0){
		return false;
	}
	$result = result_to_array($result);
	return $result;
}


/**
 * returns an array of one ROW in posts table from database
 * @return array
 */

function find_post($id){
	$db_connection = db_connection();
	$query = sprintf("select posts.title, posts.body,posts.user_id, users.username from posts, users where posts.user_id = users.id and posts.id = %s",mysql_escape_string($id));
	$result = mysql_query($query);
	$number_of_posts = mysql_num_rows($result);
	if($number_of_posts == 0){
		return false;
	}
	$row = mysql_fetch_array($result);
	return $row;
}
?>