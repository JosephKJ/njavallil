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

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Njavallil,kudumbam">
<meta name="description" content="Add stuff.">
<link rel="icon" type="image/png" href="../images/k.png" />
<title>Administrator</title>
<link rel="stylesheet" href="../styles/style.css" type="text/css" media="screen"/>
<link href='http://fonts.googleapis.com/css?family=Redressed&v1' rel='stylesheet' type='text/css'>
<style>


	.tet{
		font-family:Arial, Helvetica, sans-serif;
		word-spacing:2px;
		color:black; 
		text-align: justify; 
		padding:10px 15px 10px 15px;
		font-size:120%;
		
	}
	.tit{
	font-family: 'Redressed', arial, serif;
	font-size:250%;
	text-align:center;
	padding-top:20px;
	}
	.navb
	{
	position:relative; bottom:6px;
	}
	
	.navstl
	{
	
	}
	.navst1:hover
	{
		background-image:url('../images/navbg.png');
		background-repeat:repeat-x;
		cursor:pointer;
	}

}
</style>
</head>

<body>
	<div id="container" >
    <div id="header" >
      <div id="logo">
      <a href="http://www.njavallil.com/"><img src="../images/logo.png" alt="Njavallil Kudumbayogam"></a>
      </div>
    
      <div id="socialicons">
       <div style="text-align:center; padding-top:5px; font-size:36px; color:#FFF;">Njavallil Family</div>
      </div>
    
    
      <div class="menu-bar">
          <ul>
            <li><a href="../index.php" title="Home">Home</a></li>
            <li><a href="#" title="About Us">About Us</a></li>
            <li><a href="photogallery.html" title="Photo Gallery">Photo Gallery</a> </li>
            <li><a href="committee.html" title="Committee Members">Committee Members</a></li>
            <li><a href="contactus.php" title="Contact Us">Contact Us</a></li>
          </ul>
      </div>
      <div class="header-bottom">
     	<span style="font-size:14px; letter-spacing:1px ">
      	<span style="position:relative; bottom:6px;font-weight:bold;color:black;">Navigation bar: </span>	
      	<a href="../index.php" style="color:black;"><span class="navst1"><span class="navb">Home </span>
      	<span><img src="../images/arrow.png" /></span></span></a>
      	<a href="#" style="color:black;"><span class="navst1"><span class="navb">Administrator Page </span>
      	</span></a>
		</span>

      </div>
    </div>
    
	</div>
    <div style="background-image:url(../images/bg.png); background-repeat:repeat;">
	 	<div align="center">
		 	<div style="background-image:url('../images/bg_fading.png');background-repeat:repeat-y; max-width:1000px; min-height:90px; ">
            <!-- begin site -->
			 	<div class="tit"> Administrator Page </div>
			 	<div style="min-height:400px; padding-top:50px; width:80%; text-align:left;" >
                	<?php
						
						if(strncasecmp($_POST["pass"],'loyolite',strlen($_POST["pass"]) )!=0 || $_POST["pass"]==null )
							echo "<script type=\"text/javascript\"> window.location.href = \"login.php?token=0\"</script>";
					?>
                    Total number of visitors:
                    <?php
                    		$result=mysql_query("select count from hits where slno=1",$connection);
							$row=mysql_fetch_array($result);
							$val=$row['count'];
							echo($val);
					?>
                    <br />
                    <hr />
                    <br />
                    <h2>Events</h2>
                    <?php
			$result = mysql_query("SELECT * FROM events order by(slno) desc");
			while($row=mysql_fetch_array($result)){
				echo('
                    <table >
                          <tr>
                            <td>Slno.:</td>
                            <td>'.$row['slno'].'</td>
                          </tr>
                          <tr>
                            <td>Date:</td>
                            <td>'.$row['date'].'</td>
                          </tr>
                          <tr>
                            <td>Name:</td>
                            <td>'.$row['name'].'</td>
                          </tr>
                          <tr>
                            <td>Mobile:</td>
                            <td>'.$row['mobile'].'</td>
                          </tr>
                          <tr>
                            <td>E-mail:</td>
                            <td>'.$row['email'].'</td>
                          </tr>
                          <tr>
                            <td>Visible:</td>
                            <td>'.$row['visible'].'</td>
                          </tr>
                          <tr>
                            <td>Title:</td>
                            <td>'.$row['title'].'</td>
                          </tr>
                          <tr>
                            <td>Matter:</td>
                            <td>'.$row['matter'].'</td>
                          </tr>
                      </table>
					<hr />');
					}
		 ?>
          <br />
         			<form action="makevisible.php" method="post">
                    	Enter the Sl.no to make visible<input name="code"  type="text" /> <br />
                        Enter 1 to make visible and 0 to make it invisible<input name="vis"  type="text" /> <br />
                        <input value="alter" type="submit" />
                    </form>
           <br />
           
           <h2>Feedback</h2>
         <?php
			$result = mysql_query("SELECT * FROM fbk ");
			while($row=mysql_fetch_array($result)){
				echo('
                    <table >
                          <tr>
                            <td>Slno.:</td>
                            <td>'.$row['number'].'</td>
                          </tr>

                          <tr>
                            <td>Name:</td>
                            <td>'.$row['name'].'</td>
                          </tr>
                          <tr>
                            <td>Mobile:</td>
                            <td>'.$row['mobno'].'</td>
                          </tr>
                          <tr>
                            <td>E-mail:</td>
                            <td>'.$row['email'].'</td>
                          </tr>

                          <tr>
                            <td>Branch:</td>
                            <td>'.$row['branch'].'</td>
                          </tr>
                          <tr>
                            <td>Comment:</td>
                            <td>'.$row['comments'].'</td>
                          </tr>
                      </table>
					<hr />');
					}
		 ?>           

            <br />
            <h2>Notice board </h2>
            <h3>Contents of the notice board</h3>
                    <?php
			$result = mysql_query("SELECT * FROM notice order by(slno) desc");
			while($row=mysql_fetch_array($result)){
				echo('
                    <table >
                          <tr>
                            <td>Slno.:</td>
                            <td>'.$row['slno'].'</td>
                          </tr>
                          <tr>
                            <td>Content:</td>
                            <td>'.$row['content'].'</td>
                          </tr>

                            <td>Visible:</td>
                            <td>'.$row['visible'].'</td>
                          </tr>
                      </table>
					<hr />');
					}
		 ?>
            <br /><h3>Add a new notice</h3> <br />
                    <form action="newnoticetodb.php" method="post" id="commentform">
            
            
            <p><label for="url">Visible:(1 to make visible)</label> <input type="text" name="visible" id="visible" value="" size="22" tabindex="3">
            
            </p>
            
            
            <p>Content:<br /><textarea name="comment" id="comment" style="width:97%;"  rows="10" cols="10" tabindex="4"></textarea></p>
            
             <div>&nbsp;</div>
            
            
            <p>
            
            <input name="submit" type="submit" id="submit" tabindex="5" value="Submit Event">
            
            </p>
            
            
            
            </form>
            <br /><br /><h3>Alter a notice entry</h3> <br />
                      <br />
         			<form action="makenoticevisible.php" method="post">
                    	Enter the Sl.no to make visible<input name="code"  type="text" /> <br />
                        Enter 1 to make visible and 0 to make it invisible<input name="vis"  type="text" /> <br />
                        <input value="alter" type="submit" />
                    </form>
           <br />
           
				</div>
		 	</div>
            <!-- end site -->
		<!-- Footer starts -->
		<div style=" text-align:center; color:white; background-image:url('../images/bottom.png'); background-repeat:repeat-x;">
		<br/>
		<a style="color:white;" href="../index.php">Home</a>  |  
		<a style="color:white;" href="aboutus.html">About Us</a>  |  
		<a style="color:white;" href="photogallery.html">Photo Gallery</a>  |  
		<a style="color:white;" href="../phpBB3/index.php">Forum</a>  |  
		<a target="_blank" style="color:white;" href="http://www.mediateam.in/Familytree/index.php">Family Tree</a>  |  
		<a style="color:white;" href="addressbook.php">Address Book</a>  |  
		<a style="color:white;" href="branches.html">Branches</a>  |  
		<a style="color:white;" href="downloads.html">Downloads</a>  |  
		<a style="color:white;" href="committee.html">Committee Members</a>  |  
		<a style="color:white;" href="noticeboard.html">Notice Board</a>  |  
		<a style="color:white;" href="contactus.php">Contact Us</a>
		<br/><br/>
		This site is best viewed on Mozilla Firefox or Google Chrome at 1366X768 resolution&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    |    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		
        Site maintained by <a style="color:white" href="http://www.mediateam.in/">Media Team Solutions (India) Pvt Ltd</a>. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   |    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        
		Site designed by <a style="color:white" href="http://www.facebook.com/profile.php?id=783715135">Joseph K J</a>, Koonthanam, Karoor
		
		</div>
		<!-- Footer ends -->
		 	
	 	</div>

	</div>
</body>
</html>
<?php
	// 5. Close connection
	mysql_close($connection);
?>