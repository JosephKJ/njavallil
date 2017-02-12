<?php
  define("DB_HOST", "64.37.52.62:2082");
  define("DB_USERNAME", "njavalli_sibu");
  define("DB_PASSWORD", "koonthanam");
  define("DB_NAME", "njavalli_sibu");
  
  date_default_timezone_set('Asia/Kolkata');
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
<title>Contact Us</title>
<link rel="stylesheet" href="../styles/style.css" type="text/css" media="screen">
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
      	<a href="#" style="color:black;"><span class="navst1"><span class="navb">Contact Us </span>
      	</span></a>
		</span>

      </div>
    </div>
    
	</div>
    <div style="background-image:url(../images/bg.png); background-repeat:repeat; text-align:center;">
 	<div align="center">
 	<div style="background-image:url('../images/bg_fading.png');background-repeat:repeat-y; max-width:1000px; min-height:90px; ">
 	<div class="tit" style="color:black;"> Contact Us </div>
 	<div style="color:black; padding-left:250px;" align="left";>
 	<table cellspacing="20px">
 	<tr>
 		<td style="font-size:120%; word-spacing:2px;">
 			Official Enquiries: 
 		</td>
		<td class="entry">
		   			 <strong>Shri. K.K. Cyriac</strong> <br />President,  Njavallil Kudumbayogam, <br /> Karoor P.O, Pala, Kottayam, Kerala - 686590. <br /> Tel: +91 482 2214388 <br /> e-mail:njavallilkudumbayogam@gmail.com 
		</td>
		
 	</tr>
 	<tr>
 		<td style="font-size:120%; word-spacing:2px;">
 			Technical Enquiries: 
 		</td>
		<td class="entry">
				<strong>K J Joseph</strong><br />
			    Koonthanam,<br />
			    Karoor P.O, Pala, Kottayam, Kerala - 686590.<br /> Tel: +91 9446 945769 <br />e-mail:josephkj20@gmail.com<br />
		</td>
 	</tr>
 	</table>
 	</div>
 	<div style="color:black;">
 	<table border="1px" width="100%">
 	<tr>
 		<td style="font-size:120%">
 		
 		<span style=" padding-left:10px; font-family:'Monotype Corsiva';font-size:150%;">We would like to hear from you...</span> <br><br>		
                    	<form action="newfbtodb.php" method="post" style="font-size:smaller; font-weight:bold;">
                            <table border="0px" cellspacing="7" cellpadding="5" style="margin-left:auto; margin-right:auto;">
                                <tr align="left">
                                    <td>Name:
                                        <input name="name" type="text" maxlength="50" style="width:210px;" />
                                    </td>
                                </tr>
                                <tr align="left">
                                    <td>Branch:
                                        <select name="branch" style="width:203px;">
									      	<option>----Select any----</option>
											<option>Pazhayidam</option>
											<option>Puthenpurayil</option>
											<option>Theruvankunnel</option>
											<option>Manjakunnel</option>
											<option>Thekkel</option>
											<option>Panamattam</option>
											<option>Vilangupara</option>
											<option>Puthenpurakkal</option>
											<option>Tharavadu</option>
									  	</select>                                    
									  </td>
                                </tr>
                                <tr align="left">
                                    <td>Mobile Number:
                            			<input name="mobile" type="text" maxlength="10"  style="width:150px;"/>
                                    </td>
                                </tr>
                                <tr align="left">
                                    <td>Email ID:
                                        <input name="email" type="text" maxlength="100"  style="width:196px;"/>
                                    </td>
                                </tr>
								<tr align="left"><td>Comments:</td></tr>
                                <tr align="left">
                                    <td>
                                        <textarea name="comments" cols="10" rows="4" style="width:400px;" ></textarea>
                                    </td>
                                </tr>
                                <tr align="right">
                                    <td align="center">
                                    	<input type="submit" name="submit" value="Submit"/> <!--style="margin-left:80px;"-->
                                    </td>
                                </tr>
                        	</table>
                    	</form>
 		
 		
 		
 		</td>
 		<td align="center">
 			<table border="0px" cellspacing="4"> 				
 				<tr align="left">
 				 		<span style=" padding-left:10px; font-family:'Monotype Corsiva';font-size:200%;">Credits</span> <br><br>		

 					<td><span><strong>Biju Scaria</strong><br />
						    Flat No 9C,<br />
							Mangalam Towers,<br />
							Cochin-682028,<br />
							Kerala, South India.<br />
							Tel: +91 484 2809299 <br />
						    e-mail:koonthanam@gmail.com
						 </span>
					</td>
					<td>
						 <a href="http://www.mediateam.in/"><span style="position:static; top=10px;"><img src="../images/Media.png" /></span></a>
    				</td>
 				</tr>
 				<tr></tr>
 				<tr></tr>
 				<tr></tr>
 				<tr align="left" >
					<td><span>    <strong>K J Joseph</strong><br />
								    Koonthanam,<br />
								    Karoor P.O,<br />
								    Pala, Kottayam,<br /> Kerala - 686590.<br /> Tel: +91 9446 945769 <br />e-mail:josephkj20@gmail.com<br />
						 </span>
					</td>
					<td>
						 <a href="http://www.facebook.com/profile.php?id=783715135"><span style=" padding-left:5px;"><img src="../images/kajjahlogo.png" /></span></a>
    				</td>
 				</tr>
 			</table>
 		</td>
 	</tr>
 	</table>
 	
 	
 	</div>
 	
 	</div>
 	
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
