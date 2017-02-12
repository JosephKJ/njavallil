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
	 $name = addslashes($_POST['name']);
	 $mob = $_POST['mobile']  ;
	 $mail = $_POST['email']  ;
	 $branch = $_POST['branch']  ;
	 $add = $_POST['add']  ;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Adding to database</title>
</head>

<body>
<!--<SCRIPT LANGUAGE="JavaScript">

function valid(form) 
{
  var field = form.name;  
    
  if (name==null) 
  {
    alert("Please enter your name.");
    return false;
  } 
}

</SCRIPT>-->
<?php 
		$str = strtolower($branch);
		$result=mysql_query("INSERT INTO $str
				VALUES (null,'$name', '$add', '$mob','$mail')",$connection);

		if ($result)
		{
			echo "<script type=\"text/javascript\">alert(\"Member added successfully. Thankyou for sparing a few moments with us.\"); window.location.href = \"addressbook.php\"</script>";
		}
		else
		{
			echo "<script type=\"text/javascript\">alert(\"Failed to add member ! Try again.\"); window.location.href = \"addressbook.php\"</script>";
		}
?>
</body>
</html>
<?php
	// 5. Close connection
	mysql_close($connection);
?>