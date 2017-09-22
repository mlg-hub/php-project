 <?php include 'includes/header.php';?>

<form role="form" enctype="multipart/form-data" method="post" action="register.php">
				<div class="form-group">
			<label>Name*</label>
			<input type="text" class="form-control" name="name" placeholder="Enter your name">
				</div>
				<div class="form-group">
					<label>Email Address*</label>
					<input type="email" class="form-control" name="email" placeholder="Enter your Email">
				</div>
				<div class="form-group">
					<label>Choose Username*</label>
					<input type="text" class="form-control" name="username" placeholder="Enter your Username">
				</div>
				<div class="form-group">
					<label>Password*</label>
					<input type="password" class="form-control" name="password" placeholder="Enter your Password">
				</div>
				<div class="form-group">
					<label>Confirm Password*</label>
					<input type="password" class="form-control" name="password2" placeholder="Enter your Password Again">
				</div>
				<div class="form-group">
					<label>Upload avatar : </label> 
					<input type="file" name="avatar">
					<p class="help-block"></p>
				</div>
				<div class="form-group">
					<label>About Me</label>
					<textarea id="about" rows="6" cols="80" class="form-control"
					name="about" placeholder="Tell us about yourself (optimal)"></textarea>
				</div>
				<input class="pull-right" name="register" type="submit" class="btn btn-default" value="Register"/>
			</form>


<?php include 'includes/footer.php';?> 