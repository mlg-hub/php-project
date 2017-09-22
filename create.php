 <?php require('core/init.php');?>


 <?php
 $topic = new Topic;
//create Topic object
//$topic_id = $_GET['id'];
$user = new User;

if(isset($_POST['do_create'])){
	//validate object
	$validate = new Validator;

	// create data array
	 $data = array();
	$data['title'] = $_POST['title'];
	$data['body'] = $_POST['body'];
	$data['category_id'] = $_POST['category_id'];
	$data['user_id'] = getUser()['user_id'];
	$data['last_activity'] = date("Y -m-d H:j:s");

	$fields_array = array('title','body','category_id');
		if($validate->isRequired($fields_array)){
			//Register USer
			if ($topic->create($data)){
				redirect('index.php', 'you topic has been added', 'success');
			} else { 
				redirect('topic.php?id='.$topic_id, 'something went wrong','error');
			}
		}else {
			redirect('create.php', 'please fill all the fields', 'error');
		}
	}

// GEt Template and assign vars
 $template = new Template('template/create.php');

//assign Vars
$template->topics = $topic->getAllTopics();
$template->totalTopics = $topic->getTotalTopics();
$template->totalCategories = $topic->getTotalCategories();
$template->totalUsers = $user->getTotalUser();
 // Display template
 echo $template;
 ?> 