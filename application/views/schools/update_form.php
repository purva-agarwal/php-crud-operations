<!DOCTYPE html>
<html lang="en">
<head>
	<title>Form</title>
	<meta charset="utf-8">
	<style type="text/css">	</style>
</head>
<body>

	<form method="post" action="/schools/update/<?=$record['schools_id'];?>">
		<div>
			<label>Enter Name: </label>
			<input type="text" name="name" value="<?=$record['name']; ?>">
		</div>
		<div>
			<label>Enter Description : </label>
			<input type="text" name="description" value="<?=$record['description']; ?>">
		</div>
		<div>
			<label>Enter State </label>
			<input type="text" name="state" value="<?=$record['state'] ?>">
		</div>
		<div>
			<label>Enter City: </label>
			<input type="text" name="city" value="<?=$record['city'];?>">
		</div>
		<div>
			<button type="submit">Update</button>
		</div>
	</form>

</body>
</html>