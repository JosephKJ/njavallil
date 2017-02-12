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
<link href='http://fonts.googleapis.com/css?family=Redressed&v1' rel='stylesheet' type='text/css'>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Njavallil,kudumbam">
<meta name="description" content="Add stuff.">
<link rel="icon" type="image/png" href="../images/k.png" />
<title>Events</title>
<link rel="stylesheet" href="../styles/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="../styles/master2.css" type="text/css" media="screen">
<link rel="stylesheet" type="text/css" href="../styles/feedbackstyles.css">    
<style>
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
.tit{
	font-family: 'Redressed', arial, serif;
	font-size:250%;
	text-align:center;
	padding-top:30px;
	padding-bottom:10px;
	}
.entry{
	font-family: Arial, Helvetica, sans-serif;
	word-spacing:3px;
	font-size:110%;
	text-align:left;
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
            <li><a href="aboutus.html" title="About Us">About Us</a></li>
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
      	<a href="#" style="color:black;"><span class="navst1"><span class="navb">Events </span>
      	</span></a>
		</span>

      </div>
    </div>
    
	</div>
    <div style="background-image:url(../images/bg.png); background-repeat:repeat; text-align:center;">
 	<div align="center">
 	<div style="background-image:url('../images/bg_fading.png');background-repeat:repeat-y; max-width:1000px; min-height:90px; ">
    <!-- code starts here-->
 	<div class="tit" style="color:black;"> News and Events </div>
 
 	<div style="color:black; width:80%">

    	<?php
			$result = mysql_query("SELECT * FROM events where visible=1 order by(slno) desc ");
			while($row=mysql_fetch_array($result)){
			echo('<div style="font-family:Verdana, Geneva, sans-serif; text-align:left;">');	
			echo('<h2>'.$row['title'].'</h2>');
			echo('<div style="background-color:#f1f7f7;"> 
        <div style="margin-top:10px; border-bottom: solid 1px #DDD;" >
        	<span style="padding-left:15px; ">'.$row['name'].'</span> 
        	<span style="float:right">'.$row['date'].'</span>
        </div>
        <div  style="padding-left:30px; margin-top:15px;"><textarea readonly rows="5" style=" border:none;width:100%;background-color:#f1f7f7; ">'
        	.$row['matter'].
        '</textarea> </div>
        </div> <div>&nbsp;</div>
    <div>&nbsp;</div>');
			
			}
		 ?>

    <div>&nbsp;</div>
    <div>&nbsp;</div>
    <div style="font-family:Verdana, Geneva, sans-serif; text-align:left;"> <!-- form division -->
            <h2>Add a new event</h2>
            
            
            <form action="neweventtodb.php" method="post" id="commentform">
            
            
            <p><input type="text" name="author" id="author" value="" size="22" tabindex="1">
            
            <label for="author"><small>Your name</small></label></p>
            
            <p><input type="text" name="mob" id="author" value="" size="22" tabindex="1">
            
            <label for="author"><small>Mobile (will not be published)</small></label></p>
            
            <p><input type="text" name="email" id="email" value="" size="22" tabindex="2">
            
            <label for="email"><small>E-mail (will not be published)</small></label></p>
            
             <div>&nbsp;</div>
            
            <p><input type="text" name="topic" id="url" value="" size="22" tabindex="3">
            
            <label for="url"><small>Topic</small></label></p>
            
            
            <p><textarea name="comment" id="comment" style="width:97%;"  rows="10" cols="10" tabindex="4"></textarea></p>
            
             <div>&nbsp;</div>
            
            
            <p>
            
            <input name="submit" type="submit" id="submit" tabindex="5" value="Submit Event">
            
            </p>
            
            
            
            </form>
            
    </div>
    <!-- code ends here-->
 
 	</div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div>
 	</div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div>    </div>
	
 	<!-- Footer starts -->
   
		<div style=" text-align:center; color:white; background-image:url('../images/bottom.png'); background-repeat:repeat-x;">
		<br/>
		<a style="color:white;" href="../index.php">Home</a>  |  
		<a style="color:white;" href="aboutus.html">About Us</a>  |  
		<a style="color:white;" href="photogallery.html">Photo Gallery</a>  |  
		<a style="color:white;" href="../phpBB3/index.php">Forum</a>  |  
		<a style="color:white;" href="pages/familytree.html">Family Tree</a>  |  
		<a style="color:white;" href="pages/addressbook.php">News & Events</a>  |
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
