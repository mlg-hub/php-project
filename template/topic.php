 <?php include 'includes/header.php';?>

<ul id="topics">
	<li id="main-topic" class="topic topic">
		<div class="row">
			<div class="col-md-2">
			<div class="user-info">
		<img  class="pull-right avatar" src="<?php echo BASE_URI ;?>img/avatar/<?php echo $topic->avatar;?>" />
			<ul>
				<li><strong><?php echo $topic->username;?></strong></li>
				<li><?php echo userPostCount($topic->user_id);?>Posts</li>
				<li><a href="<?php echo BASE_URI; ?>topics.php?user=<?php echo $topic->user_id;?>">View topics</a></li>
			</ul>
			</div>
			
			</div>
				<div class="col-md-10">
					<div class="topic-content pull-right">
					<p><?php echo $topic->body;?> </p>
					</div>
				</div>
		  </div> 
 	</li>
 	<?php foreach($replies as $reply) :?>
 		<li class="topic topic">
			<div class="row">
				<div class="col-md-2">
					<div class="user-info">
						<img  class="pull-right avatar" src="<?php echo BASE_URI;?>img/<?php echo $reply->avatar; ?>" />
							<ul>
								<li><strong><?php echo $reply->username;?></strong></li>
								<li><?php echo userPostCount($reply->user_id);?>Posts</li>
								<li><a href="<?php echo BASE_URI; ?>topics.php?user=<?php echo $reply->user_id;?>">View Topics</a></li>
							</ul>
					</div>
					
				</div>
				<div class="col-md-10">
							<div class="topic-content pull-right">
							<p><?php echo $reply->body;?></p>
							</div>
				</div>
			</div> 
		</li>
	<?php endforeach;?>
	</ul>
	<?php if(isLoggedIn()):?>
			<h3>Reply to this topic</h3>
				<form role="form" method="post" action="topic.php?id=<?php echo $topic->id;?>">
					<div class="from-group">
						<textarea id="reply" rows="10" cols="80" class="form-control" name="body"></textarea>
						<script>
						 CKEDITOR.replace('reply');
						</script>
					</div>
					<button type="submit" name="sub_reply" class="btn btn-default">Submit</button>
				</form>
	<?php else :?>
        <p class="danger">Please loggin to reply</p>

	<?php endif;?>


<?php include 'includes/footer.php';?> 