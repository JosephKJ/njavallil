<?php
	require_once("./../db_connect/constants.php");
	// 1. Create a database connection
	$connection = mysql_connect(DB_HOST,DB_USERNAME,DB_PASSWORD);
	if (!$connection)
	{
		die("Database connection failed: " . mysql_error());
	}
	
	// 2. Select a database to use 
	$db_select = mysql_select_db(DB_NAME,$connection);
	if (!$db_select)
	{
		die("Database selection failed: " . mysql_error());
	}
?>
<?php
	 $title = $_POST["topic"];
	 $name = $_POST["author"]  ;
	 $matter = $_POST["comment"]  ;
	 $mob = $_POST["mob"]  ;
	 $email = $_POST["email"]  ;
	 
	 $dt=mysql_query("SELECT CURDATE()",$connection);
	 $dat=mysql_fetch_array($dt);
	 $date="$dat[0]";
	 
	 $visible=0;
	 
		$to = "josephkj20@gmail.com";
		$subject = "New event registered";
		$txt = $title."\n".$name."\n".$matter;
		
		
		mail($to,$subject,$txt);
	
	 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Adding to database</title>
</head>

<body>

<?php 

		$result=mysql_query("INSERT INTO events
				VALUES (null,'$title', '$name', '$date', '$matter', $visible,'$mob','$email')",$connection);

		if ($result)
		{
			echo "<script type=\"text/javascript\">alert(\"Your event is avaiting approval from the administrator. Thankyou for sparing a few moments with us.\"); window.location.href = \"addressbook.php\"</script>";
		}
		else
		{
			echo "<script type=\"text/javascript\">alert(\"Failed to add entry! Try again.\"); window.location.href = \"events.php\"</script>";
		}
?>
</body>
</html>
<?php
	// 5. Close connection
	mysql_close($connection);
?>