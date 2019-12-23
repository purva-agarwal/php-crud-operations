<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	table,th,tr,td {
		border: 2px solid black;
		padding: 5px;
		border-collapse: collapse;
	}
	button {
		text-align: center;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Welcome to Jedi Master!</h1>

	<div id="body">
		<table>
			<caption>Schools</caption>
			<tr>
				<th>School ID</th>
				<th>School Name</th>
				<th>Description</th>
				<th>State</th>
				<th>City</th>
				<th>Update Records</th>
			</tr>
			<?php foreach($records as $record){?>
			<tr>
				<td><?=$record->schools_id;?></td>
				<td><?=$record->name;?></td>
				<td><?=$record->description;?></td>
				<td><?=$record->state;?></td>
				<td><?=$record->city;?></td>
				<td><a href="/schools/edit/<?=$record->schools_id;?>">Edit</a></td>
				<td><a href="/schools/view/<?=$record->schools_id;?>">View</a></td>
				<td><a href="/schools/delete/<?=$record->schools_id;?>">Delete</a></td>
			</tr>
		<?php } ?>
		</table>
		<button><a href="/schools/create">Add new user</a></button>		
	</div>
</div>

</body>
</html>