
						</div>
					</div>

		      	</div>

		      	<div class="col-md-4">
		      		<div class="sidebar">
		      			<div class="block">
		      			<?php if(isloggedIn()):?>
		      				<div class="userdata">
		      					Welcome, <?php echo getUser()['username'];?>
		      				</div>
		      				<br>
		      				<form role="form" method="post" action="logout.php">
								<input type="submit" name="do_logout" class="btn btn-primary" value= "logOut">	
		      				</form>

		      			<?php else :?> 
		      				<h3>Login Form</h3>
		      				<form role="form" method="post" action="login.php">
		      					<div class="form-group">
		      						<label>Username</label>
		      						<input name="username" type="text" class="form-control" placeholder="Enter username"/>
		      					</div>
		      					<div class="form-group">
		      						<label>Password</label>
		      						<input name="password" type="password" class="form-control" id="password" placeholder="Enter password"/>
		      					</div>
		      					<button type="submit" name="do_login" class="btn btn-primary">Login</button> <a href="register.php" class="btn btn-default">Create an Account</a>
		      				</form>	
		      			<?php endif;?>
		      			</div>

		      			<div class="block">
		      				<h3>Categories</h3>
		      				<div class="list-group">
		      				<a href="topics.php" class="list-group-item <?php echo is_active(NULL);?>"> All Topics <span class="badge pull-right"><?php echo $totalTopics;?></span></a>
		      				<?php foreach(getCategories() as $category) :?>
								<a href="topics.php?category=<?php echo $category->id;?>" class="list-group-item <?php echo is_active($category->id);?>"> <?php echo $category->name;?></a>
		      				<?php endforeach;?>
		      				</div>
		      			</div>
		      		</div>
		      	</div>

	      </div>
    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html> 