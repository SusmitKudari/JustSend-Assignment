<?php
include('post_details.php');
$code = $_GET['code']
?>

<!DOCTYPE html>
<html>
<head>
	<title>code</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content= "width=device-width, initial-scale=1.0"> 

</head>
<body>
	<form method="post" action="post_details.php">

		<div class="header">
			<h2>JUstSend</h2>
		</div>
		<div class="header">
			<h3>Message Code</h3>
		</div>
		<div class="input_group">
			<input type="text" name="code" value=<?php echo $code;?> readonly>
			
			<a href="index.php" class="button"><b>BACK</b></a>
		</div>
			
</body>
</html>