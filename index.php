 <?php require('core/init.php');?>


 <?php
//create Topic object
$topic = new Topic;
//create a user object
$user = new User;

// GEt Template and assign vars
 $template = new Template('template/frontpage.php');

//assign Vars
$template->topics = $topic->getAllTopics();
$template->totalTopics = $topic->getTotalTopics();
$template->totalCategories = $topic->getTotalCategories();
$template->totalUsers = $user->getTotalUser();

 // Display template
 echo $template;
 ?>