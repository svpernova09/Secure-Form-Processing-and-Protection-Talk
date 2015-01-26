<div class="container">
	<?php
	if(isset($_POST['name'])){
		//form has been submitted
		$salutation = filter_var($_POST['salutation'], FILTER_SANITIZE_STRING);
		$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
		$greeting = 'Hello ' . $salutation . ' ' . $name;
		echo $greeting;
	} else {
		?>
		<h1>Sanitizing Data</h1>
		<form name="basic_form" method="POST" action="#">
			<label>Salutation:
				<select name="salutation" id="salutation">
					<option value="Hello">Hello</option>
					<option value="Mrs.">Mrs.</option>
					<option value="Mr.">Mr.</option>
				</select>
			</label>
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