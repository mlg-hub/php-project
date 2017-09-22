 <?php require('core/init.php');?>

<?php
//create Topic object
$topic = new Topic;
// create user object
$user = new User;
//GEt category  from URL
$category = isset($_GET['category']) ? $_GET['category'] : null;
//
$user_id = isset($_GET['user']) ? $_GET['user'] : null;

// GEt Template and assign vars
 $template = new Template('template/topics.php');

 // assign template variable
 if(isset($category)){
 	$template->topics = $topic->getByCategory($category);
 	$template->title = 'Post in "'.$topic->getCategory($category)->name.'"';
 }
 
 if (isset($user_id)){
 $template->topics = $topic->getByUser($user_id);
 //$template->title = 'Post in "'.$user->getUser($user_id)->username.'"';
 }
 
//assign Vars
 if(!isset($user_id) && !isset($category)) {
$template->topics = $topic->getAllTopics();
}


$template->totalTopics = $topic->getTotalTopics();
$template->totalCategories = $topic->getTotalCategories();
$template->totalUsers = $user->getTotalUser();
 // Display template
 echo $template;
 ?> 