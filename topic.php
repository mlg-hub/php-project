 <?php require('core/init.php');?>


 <?php
//create Topic object
$topic = new Topic;
$topic_id = $_GET['id'];

// GEt Template and assign vars
 $template = new Template('template/topic.php');

 //CHeck for reply
 if(isset($_POST['sub_reply'])){
    	//create data array
 	$data = array();
 	$data ['topic_id'] = $_GET['id'];
 	$data ['body'] = $_POST['body'];
 	$data ['user_id'] = getUser()['user_id'];

 	//create a new validate object

 	$validate = new Validator;
 	 // required fields
 	$fields_array = array('body');

 	if ($validate->isRequired($fields_array)){
 			if($topic->reply($data)){
 				redirect('topic.php?id='.$topic_id, 'Your reply has been posted', 'success');
 			}else{
 				redirect('topic.php?id='.$topic_id, 'Something went wrong', 'error');
 			}
 	}else {
 		redirect('topic.php?id='.$topic_id, 'Your reply form is blank', 'error');
 	}
 }

//assign Vars

$template->topic = $topic->getTopic($topic_id);
$template->replies = $topic->getReplies($topic_id);
$template->title = $topic->getTopic($topic_id)->title;

//

$template->topics = $topic->getAllTopics();
$template->totalTopics = $topic->getTotalTopics();
$template->totalCategories = $topic->getTotalCategories();

 // Display template
 echo $template;
 ?> 