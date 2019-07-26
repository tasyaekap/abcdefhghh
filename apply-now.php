<?php
	$degree = $_POST['degree'];
	$sid = $_POST['studentid'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];


?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<tr>
		<td>Degree</td>
		<td><?php echo $degree; ?></td>
	</tr>
	<br/>
	<tr>
		<td>studentid</td>
		<td><?php echo $sid; ?></td>
	</tr>
	<br/>
	<tr>
		<td>FirstName</td>
		<td><?php echo $fname; ?></td>
	</tr>
	<br/>
	<tr>
		<td>LastName</td>
		<td><?php echo $lname; ?></td>
	</tr>
	<br/>
	<tr>
		<td>Gender</td>
		<td><?php echo $gender; ?></td>
	</tr>
	<br/>
	<tr>
		<td>email</td>
		<td><?php echo $email; ?></td>
	</tr>
	<br/>
</body>
</html>