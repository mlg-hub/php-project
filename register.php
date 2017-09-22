 <?php require('core/init.php');?>


 <?php
//create Topic object
$topic = new Topic;

//create a User object
$user = new User;

//create a validator user
$validate = new Validator; 

if(isset($_POST['register'])){
	// create data Array
	$data = array();
	$data['name'] = $_POST['name'];
	$data['email'] = $_POST['email'];
	$data['username'] = $_POST['username'];
	$data['password'] = md5($_POST['password']);
	$data['password2'] = md5($_POST['password2']);
	$data['about'] = $_POST['about'];
	$data['avatar'] = $_POST['avatar'];
	$data['last_activity'] = date("Y-m-d H:j:s");

	//required array

	$fields_array = array ('name','email','username','password','password2');

	//validate user
	if($validate->isRequired($fields_array)){

			if ($validate->isValidEmail($data['email'])){
				if($validate->passwordMatch($data['password'], $data['password2'])){

					if($user->uploadAvatar()){
							$data['avatar'] = $_FILES['avatar']['name'];
							}else {
								$data['avatar'] = "noimage.png";
							}
							//Register user
							if($user->register($data)){
								redirect('index.php','you registered and can loggin', 'success');
							}else {
								redirect('index.php', 'Somethin went wrong with the registration', 'error');
							}
			}else{
				redirect('register.php', 'your password doesnt match', 'error');
			}
		}else{
			redirect('register.php', 'please you a valid email address','error');
		}
	}else{
		redirect('register.php', 'fill all the fields','error');
	}


		//Upload Avatar Image
	
}


// GEt Template and assign vars
 $template = new Template('template/register.php');

//assign Vars

$template->topics = $topic->getAllTopics();
$template->totalTopics = $topic->getTotalTopics();
$template->totalCategories = $topic->getTotalCategories();

 // Display template
 echo $template;
 ?>