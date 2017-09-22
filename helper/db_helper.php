 <?php
 // GET reply count 
 function replyCount($topic_id){
 	$db = new Database;

 	$query = "SELECT * FROM replies WHERE topic_id = :topic_id";
 	$db->query($query);
 	$db->bind(':topic_id', $topic_id);

 	//Assign rows
 	$rows = $db->resultset();
 	//	GEt count
 	return $db->rowCount();
 }

function getCategories(){
	$db = new Database;
	$db->query('SELECT * FROM categories');

	$result = $db->resultset();

	return $result;
 }

 function userPostCount($user_id){
 	$db = new Database;
 		$db->query("SELECT * FROM topics WHERE user_id = :user_id");
 		$db->bind('user_id', $user_id);

 		//Assign rows
 		$row = $db->resultset();
 		//count rows
 		$topic_count = $db->rowCount();

 		$db->query("SELECT * FROM replies WHERE user_id = :user_id");
 		$db->bind('user_id', $user_id);

 		$Rows= $db->resultset();
 		// GET count
 		$reply_count = $db->rowCount();
 		return  $topic_count + $reply_count;
 }




 ?>