<?php
	require_once("db_connect/constants.php");
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
$result=mysql_query("select count from hits where slno=1",$connection);
	$row=mysql_fetch_array($result);
	$val=$row['count'];
	$val=$val+1;
	$result=mysql_query(" 	UPDATE hits
							SET count=$val
							WHERE slno=1;",$connection);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Njavallil,kudumbam, kerala, pala, karoor, kottayam, kudumbayogam, palakaran, family website, family, relatives">
<meta name="description" content="Njavallil Family is one of the most ancient and aristocratic Syrian Christian family in Kerala, India. It was founded over 250 years back by Cherian Kurian Njavallil at Lalam Kara on the northern part of Pala, Kottayam.

The Njavallil family mainly consists of nine branches:
(1) Pazhayidam
(2) Puthenpurayil
(3) Theruvankunnel
(4) Manjakunnel
(5) Thekkel
(6) Panamattam
(7) Vilangupara
(8) Puthenpurackal
(9) Njavallil (Tharavadu) ">
<link rel="icon" type="image/png" href="images/k.png" />
<title>Njavallil Kudumbayogam</title>
<link href='http://fonts.googleapis.com/css?family=Tangerine&v1' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Varela&v1' rel='stylesheet' type='text/css'>

<link href='http://fonts.googleapis.com/css?family=Cabin+Sketch:bold&v1' rel='stylesheet' type='text/css'>

<link href='http://fonts.googleapis.com/css?family=Damion&v1' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="styles/style.css" type="text/css" media="screen"/>

		<!-- slide show-->
		<link rel="stylesheet" href="styles/jd.gallery.css" type="text/css" media="screen" charset="utf-8" />
		<script src="javascript/slideshow/mootools.v1.11.js" type="text/javascript"></script>
		<script src="javascript/slideshow/jd.gallery.js" type="text/javascript"></script>
		<script src="javascript/slideshow/jd.gallery.transitions.js" type="text/javascript"></script>
<script type="text/javascript" language="javascript">
function wait()
{ 
    if(document.getElementById)
    {
        document.getElementById('waitpage').style.visibility='hidden';
    }
    else
    {
    if(document.layers)
    {
        document.waitpage.visibility = 'hidden';
    }
    else
    {
        document.all.waitpage.style.visibility = 'hidden';
    }
    }
}
</script>

<style>
.notice{
	font-family: 'Cabin Sketch', arial, serif;
	padding-left:67px;
	padding-top:15px;
	font-size:225%;
	padding-bottom:3px;
	}
.noticeentry{
	font-family:Arial, Helvetica, sans-serif;
	padding-right:10px;
	font-size:110%;
	text-align:justify;
	}
.divider{
	color: maroon;
	width:220px;	
	}
.frontabout{
	padding-top:10px;
	font-family: 'Varela', arial, serif;
	font-size:125%;
	width:950px; 
	padding-left:20px; 
	text-align:justify;
	padding-bottom:15px;
	}
.tile{
	-moz-box-shadow: 5px 5px 2px #888;
	-webkit-box-shadow: 5px 5px 2px #888;
	box-shadow: 5px 5px 2px #888;
	float:left; 
	padding-left:5px;
	background-image:url('images/bottlineinv.png');
	background-repeat:repeat-x;
	min-width:187px;
	min-height:100px;
	margin-left:15px;	
	}
.tile:hover{
	-moz-box-shadow: 10px 10px 5px #888;
	-webkit-box-shadow: 10px 10px 5px #888;
	box-shadow: 10px 10px 5px #888;
	float:left; 
	padding-left:5px;
	background-image:url('images/tile/bg.png');
	background-repeat:repeat-x;
	min-width:187px;
	min-height:100px;
	margin-left:15px;
	cursor:pointer;	
	}

.titlewriting{
font-family: 'Tangerine', arial, serif;
	position:absolute;
	padding-top:35px;
	font-size:240%;	}
.modal{
 
	background: #000;
	position: fixed; left: 0; top: 0;
	width: 100%; height: 100%;
	opacity: .80;
	z-index: 9999;
	
	position: absolute; height:100%; width:100%; z-index: 2;background-color:black;
}
.hideph{
	opacity: .99;
}
}
</style>
</head>

 <body onLoad="wait();" >

<!--<body>-->
		<script type="text/javascript">
			function startGallery() {
				var myGallery = new gallery($('myGallery'), {
					timed: true,
					defaultTransition: "fadeslideleft"
				});
			}
			window.onDomReady(startGallery);
		</script>
		
<!--		<div style="position: absolute; height:100%; width:100%; z-index: 2;background-color:black;" id="waitpage"> -->
		<div id="waitpage" class="modal">
		
				<div style="left:0px; top:0px; position:absolute; layer-background-color:white; height:100%; width:100%;">
						<table width="100%" height="100%" align="center">
						    <tr align="center" >
						        <td><img src="images/loading.gif"/></td>
						    </tr>
						    <tr align="center">
						    	<td style="font-family:'Monotype Corsiva';font-size:600%; color:#CCCCCC;"> Loading... </td>
						    </tr>
						</table>
				</div>
		</div>


	<div id="container" >
    <div id="header" >
      <div id="logo">
      <a href="http://www.njavallil.com/"><img src="images/logo.png" alt="Njavallil Kudumbayogam"></a>
      </div>
    
      <div id="socialicons">
       <div style="text-align:center; padding-top:5px; font-size:36px; color:#FFF;">Njavallil Family</div>
      </div>
    
    
      <div class="menu-bar">
          <ul>
            <li><a href="#" title="Home">Home</a></li>
            
            <li><a href="pages/aboutus.html" title="About Us">About Us</a></li>
            <li><a href="pages/photogallery.html" title="Photo Gallery">Photo Gallery</a> </li>
            <li><a href="pages/committee.html" title="Committee Members">Committee Members</a></li>
            <li><a href="pages/contactus.php" title="Contact Us">Contact Us</a></li>
          </ul>
      </div>
      <div class="header-bottom">
        <!--<marquee style="color:#000">Important News about the site</marquee>-->
	   </div>
    </div>
    
</div>
        
<div style="background-image:url(images/bg.png); background-repeat:repeat; height:430px;">
	<div style="height:0px;">
		<div class="content hideph" style=" padding:10px 10px 0px 105px; width:1000px;">
					<div id="myGallery">
						<div class="imageElement">
							<h3>Pala</h3>
							<p>Pala, the "Mini Vatican of India", the nodal point of the Njavallil Family</p>
							<a href="#" title="Pala Town" class="open"></a>
							<img src="images/slideshow/1.jpg" class="full" />
							<img src="images/slideshow/1-mini.jpg" class="thumbnail" />
						</div>
						<div class="imageElement">
							<h3>St.Thomas Cathedral</h3>
							<p>The historic St.Thomas Cathedral, Pala was founded one thousand years back(3-7-1002)under the leadership of Tharayil Thomman Mappila.</p>
							<a href="#" title="Cathedral Church" class="open"></a>
							<img src="images/slideshow/2.jpg" class="full" />
							<img src="images/slideshow/2-mini.jpg" class="thumbnail" />
						</div>
						<div class="imageElement">
							<h3>Sacred Heart Church, Karoor</h3>
							<p>Sacred Heart Church, Karoor was founded is 1898, under the leadership of eminent Njavallil family members</p>
							<a href="#" title="Karoor S.H Church" class="open"></a>
							<img src="images/slideshow/3.jpg" class="full" />
							<img src="images/slideshow/3-mini.jpg" class="thumbnail" />
						</div>
						<!--
						<div class="imageElement">
							<h3>Item 4 Title</h3>
							<p>Item 4 Description</p>
							<a href="#" title="open image" class="open"></a>
							<img src="images/brugges2006/4.jpg" class="full" />
							<img src="images/brugges2006/4-mini.jpg" class="thumbnail" />
						</div>
						<div class="imageElement">
							<h3>Item 5 Title</h3>
							<p>Item 5 Description</p>
							<a href="#" title="open image" class="open"></a>
							<img src="images/brugges2006/5.jpg" class="full" />
							<img src="images/brugges2006/5-mini.jpg" class="thumbnail" />
						</div>
						<div class="imageElement">
							<h3>Item 6 Title</h3>
							<p>Item 6 Description</p>
							<a href="#" title="open image" class="open"></a>
							<img src="images/brugges2006/6.jpg" class="full" />
							<img src="images/brugges2006/6-mini.jpg" class="thumbnail" />
						</div>
						<div class="imageElement">
							<h3>Item 7 Title</h3>
							<p>Item 7 Description</p>
							<a href="#" title="open image" class="open"></a>
							<img src="images/brugges2006/7.jpg" class="full" />
							<img src="images/brugges2006/7-mini.jpg" class="thumbnail" />
						</div>
						<div class="imageElement">
							<h3>Item 8 Title</h3>
							<p>Item 8 Description</p>
							<a href="#" title="open image" class="open"></a>
							<img src="images/brugges2006/8.jpg" class="full" />
							<img src="images/brugges2006/8-mini.jpg" class="thumbnail" />
						</div>-->
					</div>
				</div>
		
				<div class="frontabout">
					<span style=" font-family: 'Damion', arial, serif; word-spacing:5px; font-size:180%; ">What we are...<br/></span>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	According to eminent historians in Kerala, Njavallil family was descended from Parackal Manayil Parameswarn Namboodiripad who lived at North Parur. He embraced Catholicism as far back as in the 1st Century A.D. straight from the apostle St.Thomas who landed in Kerala in 52 A.D. and received the name Yohannan when baptized.
					From North Parur Yohannan’s two sons moved to Pallippuram, on the western bank of the Vaikom backwaters.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a style="color:#045b7e;" href="pages/aboutus.html">...read more</a>
				</div>
					</div>

<!--			<div style="position: absolute; left:1080px;top:151px; width:265px; height:424px; z-index: 1; background-image:url('images/notice.png');background-repeat:repeat-y;" id="layer1" >-->

			<div style="position: relative; left:1000px;top:0px; width:259px; height:430px; z-index: 1; background-image:url('images/notice.png');background-repeat:repeat-y;" id="layer1" >

				<div class="notice">Notice board</div>
               	
                <marquee style="position: relative;" height="79px;" behavior="scroll" align="center" direction="up" scrollamount="2" scrolldelay="5"  onmouseover="this.stop()" onmouseout="this.start()"><br>
                <?php
				$result = mysql_query("SELECT * FROM notice where visible=1 order by(slno) desc ");
				while($row=mysql_fetch_array($result)){
					
					echo('				<ul>
					<li class="noticeentry">'.$row['content'].'</li>
				</ul>
				<!--<hr class="divider"/>-->');
			
				}
		 		?>
                </marquee>
                <div style="position:absolute; top:120px; left:20px; ">
                	<h3 align="center" style="font-family: 'Cabin Sketch', arial, serif; font-size:20px; padding-bottom:0px;">Obituary</h3>
                    <span style="font-family: 'Varela', arial, serif; font-size:13px; text-align:justify;" >
                    	<strong>James Kurian</strong>(Jameskutty), 57, of Njavallil Puthenpurayil, Karoor, passed away on March 16,2012. The funeral service will be conducted on March 17 at SH Church, Karoor. HE Mar Joseph Kallarangatt will officiate the funeral. 
                    </span>
                    
                </div>
                <div style="position:absolute; top:257px; left:20px; ">
                	<h3 align="center" style="font-family: 'Cabin Sketch', arial, serif; font-size:20px; padding-bottom:0px;">Newspaper Supplement </h3>
                    <span style="font-family: 'Varela', arial, serif; font-size:13px; text-align:justify;" >
                    The below given is the link to the newspaper supplement that was published in 'Deepika' newspaper on 25/1/2012.
                    <br />
           			Link:<a href="pages/supplement.html" style="color:#045b7e;">&nbsp; <span style="font-size:12px;">Click here to view the supplement</span></a></span>
                    <hr style="color: #045b7e;width:220px;"/>
                </div>
              <!--  <div style="position:absolute; top:227px; left:20px;">
                	<h3 align="center" style="font-family: 'Tangerine', arial, serif; font-size:30px; padding-bottom:0px;">Njavallil Day 2012</h3><br />
                    <span  style="font-family:Tahoma, Geneva, sans-serif; font-size:14px;">Date&nbsp;&nbsp;: 26-January-2012<br />
                    Venue: Residence of Mr. Bastian Litto <br />
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Njavallil Koonthanam<br />
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Karimkunnam<br />
           			Letter:<a style="color:#045b7e;" href="pages/letter.html">&nbsp; Click here to view the invitation</a></span>
                    <hr style="color: #045b7e;width:220px;"/>
                </div>-->
				<span style="position:absolute; top:387px; left:40px; font-style:italic; font-size:130%;">Join us at:</span>
				<span style="position:absolute; top:380px; left:130px;"><a target="_blank" href="http://www.facebook.com/home.php?sk=group_211051132268320&ap=1"><img width="45px" height="45px" src="images/facebook.png" /></a></span>
				<span style="position:absolute; top:380px; left:190px;"><a target="_blank" href="http://www.orkut.co.in/Main#Community?cmm=48062814"><img width="45px" height="45px" src="images/orkut.png" /></a></span>
			</div>
		
				
</div>


<div style="padding-top:16px; min-height:110px; background-image:url(images/bottline.png); background-repeat:repeat-x; min-width:100%;">
    <a style="color:#045b7e;" href="pages/photogallery.html">
    <div  class="tile">
    	<span style="padding-left:3px;" ><img src="images/tile/photo.png" /></span>
    	<span style="padding-left:0px;" class="titlewriting">Photo Gallery</span>
    </div></a>
    <a style="color:#045b7e;" href="pages/branches.html">
    <div  class="tile">
    	<img src="images/tile/branch.png" width="110px" style="padding-top:5px;" />
    	<span class="titlewriting" style=" padding-left:0px;">Branches</span>
    </div></a>
	<a style="color:#045b7e;" href="phpBB3/index.php"><div  class="tile">
		<img src="images/tile/forum.png" />
    	<span class="titlewriting" style=" padding-left:20px;">Forum</span>	
    </div></a>
    <a style="color:#045b7e;" href="pages/addressbook.php">
	<div  class="tile">
    	<img src="images/tile/addressbook.png" />
    	<span class="titlewriting" style=" padding-left:5px;">News & Events</span>
    </div></a>
    
    <a style="color:#045b7e;" href="pages/familytree.html">
	<div  class="tile">
    	<img src="images/tile/tree.png" />
    	<span class="titlewriting" style=" padding-left:5px;">Family Tree</span>
    </div></a>
    
    <a style="color:#045b7e;" href="pages/downloads.html">
    	<div  class="tile">
    	<img src="images/tile/download.png" style="padding-left:10px;" />
    	<span class="titlewriting" style=" padding-left:20px;">Downloads</span>
    </div></a>
</div>
<div style=" text-align:center; color:white; background-image:url('images/bottom.png'); background-repeat:repeat-x;">
		<br/>
		<a style="color:white;" href="index.php">Home</a>  |  
		<a style="color:white;" href="pages/aboutus.html">About Us</a>  |  
		<a style="color:white;" href="pages/photogallery.html">Photo Gallery</a>  |  
		<a style="color:white;" href="phpBB3/index.php">Forum</a>  |  
		<a style="color:white;" href="pages/familytree.html">Family Tree</a>  |  
		<a style="color:white;" href="pages/addressbook.php">News & Events</a>  |  
		<a style="color:white;" href="pages/branches.html">Branches</a>  |  
		<a style="color:white;" href="pages/downloads.html">Downloads</a>  |  
		<a style="color:white;" href="pages/committee.html">Committee Members</a>  |  
		<a style="color:white;" href="pages/noticeboard.html">Notice Board</a>  |  
		<a style="color:white;" href="pages/contactus.php">Contact Us</a>
		<br/><br/>
		This site is best viewed on Mozilla Firefox or Google Chrome at 1366X768 resolution&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    |    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		
        Site maintained by <a style="color:white" href="http://www.mediateam.in/">Media Team Solutions (India) Pvt Ltd</a>. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   |    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        
		Site designed by <a style="color:white" href="http://www.facebook.com/profile.php?id=783715135">Joseph K J</a>, Koonthanam, Karoor
		
</div>
</body>
</html>
<?php
	// 5. Close connection
	mysql_close($connection);
?>