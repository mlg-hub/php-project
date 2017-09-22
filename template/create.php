<?php include 'includes/header.php';?>

<form role="form" action="create.php" method="post">
	<div class="form-group">
		<label>Topic Title</label>
		<input type="text" class="form-control" name="title" placeholder="Enter topic title"/>
	</div>
	<div class="form-group">
		<label>Categories</label>
		<select class="form-control" name="category_id">
         <?php foreach(getCategories() as $category) :?>
			<option value="<?php echo $category->id;?>"><?php echo $category->name;?></option>
		<?php endforeach;?>
		</select>
	</div>
	<div class="form-group">
		<label>Topic body</label>
		<div class="clearfix"></div>
		<textarea id="body" rows="10" cols="80" class="from-control" name="body"></textarea>
		<script type="text/javascript"> CKEDITOR.replace('body');</script>
	</div>
	<div class="clearfix"></div>
	<button type="submit" name="do_create" class="btn btn-default">Submit</button>
</form>

<?php include 'includes/footer.php';?> 