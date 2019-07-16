<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
	<link rel="stylesheet" type="text/css" href="formStyle.css" />
	<script type="text/javascript" src="form.js"></script>
</head>
<body>
	<div id="form-div">

		<form action="" method="get">
			<h2>Registration Form</h2>
			<div>
				<label>Name</label>
				<input type="text" name="name" required="" style="width: 94%;" />
			</div>
			<div>
				<label>Mobile</label>
				<input type="text" name="mobile" required="" style="width: 94%;">
			</div>
			<div>
				<label>Address</label><br>
				<textarea style="width: 97%;padding: 5px;"></textarea>
			</div>
			<div>
				<label>State</label>
				<select onchange="fetchCities(this.value)">
					<option>Select State</option>
					<option>Uttar Pradesh</option>
					<option>Maharashtra</option>
					<option>Bihar</option>
				</select>
			</div>
			<div >
				<label>Select City</label>
				<select id="cities">
					<option>First Select State</option>

				</select>
			</div>
			<div>
				<input type="submit" name="" value="Submit">
			</div>
			
		</form>
		
	</div>

</body>
</html>