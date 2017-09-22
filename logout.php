<?php include 'core/init.php';?>

<?php
if(isset($_POST['do_logout'])){
	//create User object

	$user = new User;
	if ($user->logout()){
		redirect('index.php', 'you are now logged out', 'Success');
	}
}else{
	redirect('index.php');
}


?>