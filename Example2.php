<div class="container">
	<?php
	if(isset($_POST['name'])){
		//form has been submitted
		?>
		Hello <?php echo htmlentities($_POST['name']); ?>
	<?php
	} else {
		?>
		<h1>Basic HTML Form</h1>
		<form name="basic_form" method="POST" action="#">
			<label>Name:
				<input type="text" name="name" id="name" value="">
			</label>
			<label>
				<input type="submit" id="submit" value="Submit">
			</label>
		</form>
	<?php
	}
	?>
</div> <!-- /container -->