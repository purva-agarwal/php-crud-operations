<!DOCTYPE html>
<html lang="en">
<head>
	<title>Form</title>
	<meta charset="utf-8">
	<style type="text/css">	</style>
</head>
<body>

	<form method="post" action="/schools/store">
		<div>
			<label>Enter Name: </label>
			<input type="text" name="name">
		</div>
		<div>
			<label>Enter Description : </label>
			<input type="text" name="description">
		</div>
		<div>
			<label>Enter State </label>
			<input type="text" name="state">
		</div>
		<div>
			<label>Enter City: </label>
			<input type="text" name="city">
		</div>
		<div>
			<button type="submit">Submit</button>
		</div>
	</form>

</body>
</html>