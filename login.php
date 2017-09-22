<?php include 'core/init.php';?>
<?php 
if(isset($_POST['do_login'])){

	$username=$_POST['username'];
	$password = md5($_POST['password']);

	//create user object;
	$user = new User;
		if($user->login($username, $password)){
			redirect('index.php','You have Loggin', 'success');
		}else{
			redirect('index.php', 'you loggin has Failed', 'error');
		}

} else{
	redirect('index.php');
}