<!DOCTYPE html>
<html>
<head>
	<title> Subscribe </title>
</head>
<body>
	<form method = "POST" action = "">
	Name : <input type = "text" name = "names" required><br />
	Email : <input type = "email" name = "emails" required><br /><br />
	<input type = "submit" value = "Add to mailing list" name = "submit" >
	
	<?php
	
	if(isset($_POST['submit'])) 
	{
		$database = "emails.txt";
		$file = fopen($database , "a+");
		$size = filesize($database);
		$names = $_POST['names'];
		$emails = $_POST['emails'];
		fwrite($file , "\"$names\" <$emails> \n");
		echo "\n";
	}
	?>
	</form>
</body>
</html>
