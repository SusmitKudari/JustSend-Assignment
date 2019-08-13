<?php
   include('read_details.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Read</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content= "width=device-width, initial-scale=1.0"> 

</head>
<body>
	<form method="post" action="read_details.php">

		
		<div class="header">
			<h3>To read the message access the code</h3>
		</div>
		<div class="input_group1">
			<input type="text" name="code" placeholder="Code">
			<input type="submit" name="submit" value="submit">
		</div>
			
</body>
</html>