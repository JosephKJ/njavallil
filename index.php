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

<link href='http://fonts.googleapis.com/css?family=Bangers&v1' rel='stylesheet' type='text/css'>

<!--
<script>
var myWidth;
var myHeight;

if( typeof( window.innerWidth ) == 'number' ) { 

//Non-IE 

myWidth = window.innerWidth;
myHeight = window.innerHeight; 

} else if( document.documentElement && 

( document.documentElement.clientWidth || document.documentElement.clientHeight ) ) { 

//IE 6+ in 'standards compliant mode' 

myWidth = document.documentElement.clientWidth; 
myHeight = document.documentElement.clientHeight; 

} else if( document.body && ( document.body.clientWidth || document.body.clientHeight ) ) { 

//IE 4 compatible 

myWidth = document.body.clientWidth; 
myHeight = document.body.clientHeight; 

}
if(myWidth<1366&&myWidth>1000&&navigator.appName == "Netscape")
{
	window.location.href="lowRes.php";
}
</script>-->
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
	text-align:center;
	padding-top:15px;
	font-size:225%;
	padding-bottom:3px;
	}
.noticeentry{
	font-family:Arial, Helvetica, sans-serif;
	/*padding-right:10px;*/
	font-size:110%;
	text-align:justify;
	}
.divider{
	color: maroon;
	width:220px;	
	}
.frontabout{
	padding-top:7px;
	font-family: 'Varela', arial, serif;
	font-size:120%;
	//width:1050px; 
	padding-left:20px;
	padding-right:20px; 
	text-align:justify;
	padding-bottom:3px;
	color:black;
	}
.tile{
	-moz-box-shadow: 5px 5px 2px #888;
	-webkit-box-shadow: 5px 5px 2px #888;
	box-shadow: 5px 5px 2px #888;
	float:left; 
	padding-left:5px;
	background-image:url('images/bottlineinv.png');
	background-repeat:repeat-x;
	min-width:202px;
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
	min-width:202px;
	min-height:100px;
	margin-left:15px;
	cursor:pointer;	
	}

.titlewriting{
	/*font-family: 'Dancing Script', arial, serif;*/
font-family: 'Tangerine', arial, serif;
	position:absolute;
	padding-top:35px;
	font-size:240%;

	}
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


<div id="container">
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
        
<div id="container2" style="background-image:url(images/bg.png); background-repeat:repeat; overflow:auto; ">
    <div style="position:relative;  float:left;  width:18%; height:50%; background-color: #FFF; background-image:url('images/notice5.png');background-repeat:repeat-y; background-position:right;">
    	<div style="width:100%; position:relative;  float:left; padding-left:5px;">
        		<!--<div style="position:relative; padding-top:15px; padding-right:10px;">
                	<h3 align="center" style="font-family: 'Cabin Sketch', arial, serif; font-size:20px; padding-left:12px;">Felicitation</h3>
                    <span style="font-family: 'Varela', arial, serif; font-size:13px; text-align:justify;" >
                    Njavallil Kudumbayogam felicitates Prof. K K Abraham on being appointed as the Vice Chairman of the Rubber Board. 
           			<a href="pages/felicitation.html" style="color:#045b7e;">&nbsp; <div style="font-size:14px; text-align:center;">Click here to view the photos.</span></a></div>
                    
                </div>-->
                
                <!--<div style="position:relative; padding-top:15px;">
                	<h3 align="center" style="font-family: 'Cabin Sketch', arial, serif; font-size:18px; padding-left:12px;">16th Kudumbayogam-2013</h3>
                    <span style="font-family: 'Varela', arial, serif; font-size:13px; text-align:justify;" >
                    <strong>Venue</strong>: Residence of K.J.Abraham (Avirachen), Koonthanam, Karoor, Pala.<br /><br />
                    <strong>Date</strong>: 26th January, 2013<br /><br />
                    <strong>Chief Guest</strong>: Mar.Jacob Muricken, <br />The Auxiliary Bishop of Palai.<br /><br />
                    <span style="text-decoration:underline">Links:</span>
           			<a href="pages/letterJan.html" style="color:#045b7e;">&nbsp; <span style="font-size:14px;">Invitation letter, Program, Audited accounts</span></a></span><br /><br />
                    <a href="pages/letterDec.html" style="color:#045b7e; padding-left:15px;">&nbsp; <span style="font-size:14px;">Letter posted in December</span></a></span>
                    
                </div>-->
                   <!--      
                	<h3 align="center" style="font-family: 'Cabin Sketch', arial, serif; font-size:20px; padding-left:2px;">News Letter - April 2015</h3>
                   <a href="pages/colorNewsletter.html"> <div style="position:relative; padding-top:5px;"> <span style="font-family: 'Varela', arial, serif; color:#000; text-align:center; font-size:13px;  text-align:center; color:blue;" >
                    Click here to read through the April 2015 News Letter </span><br /><br />
                </div></a>
            -->


                <div style="position:relative; padding-top:5px;">
                	<h3 align="center" style="font-family: 'Cabin Sketch', arial, serif; font-size:20px; padding-bottom:0px;">Membership Form</h3>
                    <span style="font-family: 'Varela', arial, serif; font-size:13px; text-align:justify;" >
                    Dear Family Members, If you have not taken formal membership with Kudumbayogam, you can fill up the following application form and submit it either via e-mail or ordinary post. You can reach us at mail@njavallil.com
                    <br /><br />
           			Link:<a href="files/application_form.pdf" style="color:#045b7e;">&nbsp; <span style="font-size:12px;">Download membership form.</span></a></span>
                </div>

                <div style="position:relative; padding-top:5px;">
                	<h3 align="center" style="font-family: 'Cabin Sketch', arial, serif; font-size:18px; padding-left:2px;">21st Kudumbayogam-2018</h3>
                    <span style="font-family: 'Varela', arial, serif; font-size:13px; text-align:justify;" >
                    Browse through the 100+ photos taken during the event at the <a href="pages/photogallery.html">Photogallery</a>.
                </div>

                <!--
                <div style="position:relative; padding-top:5px;">
                	<h3 align="center" style="font-family: 'Cabin Sketch', arial, serif; font-size:20px; padding-bottom:0px;">Newspaper Supplement </h3>
                    <span style="font-family: 'Varela', arial, serif; font-size:13px; text-align:justify;" >
                    The below given is the link to the newspaper supplement published in 'Deepika' newspaper on 25/1/2014.
                    <br /><br />
           			Link:<a href="pages/supplement.html" style="color:#045b7e;">&nbsp; <span style="font-size:12px;">Click here to view the supplement</span></a></span>
                </div>
                -->

				<div style="position:relative; padding-top:57px;">
                <br />	<hr style="color: #045b7e;width:220px;"/>
                <div>
                <span style="position:relative; font-style:italic; font-size:130%;">Join us at:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<span ><a target="_blank" href="http://www.facebook.com/home.php?sk=group_211051132268320&ap=1"><img width="45px" height="45px" src="images/facebook.png" /></a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<!--<span ><a target="_blank" href="http://www.orkut.co.in/Main#Community?cmm=48062814"><img width="45px" height="45px" src="images/orkut.png" /></a></span>-->
                </div>
				</div>
                
        </div>
        <!--<div style="width:10%; background-image:url(images/notice2.png); background-repeat:repeat-y; position:relative; float:left; min-height:300px;  ">
        &nbsp;
        </div>-->
    </div>
    
    <div id="Gallery_and_writeup" style="position:relative;  float:left;  width:64%; height:50%;" >
    
		<div align="center">
					<iframe src="./frontSlideshow.php" style="width:80%; min-height:258px;; background-image:url(images/bg.png); background-repeat:repeat;" scrolling="no"  marginwidth="0" marginheight="0" frameborder="0" vspace="0" hspace="0" ></iframe>
			 	
		</div>
		
		<div class="frontabout">
					<span style="font-family: 'Damion', arial, serif; word-spacing:5px; font-size:170%;  ">What we are...<br/></span>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	According to eminent historians in Kerala, Njavallil family was descended from Parackal Manayil Parameswarn Namboodiripad who lived at North Parur. He embraced Catholicism as far back as in the 1st Century A.D. straight from the apostle St.Thomas who landed in Kerala in 52 A.D. and received the name Yohannan when baptized.
					From North Parur Yohannan’s two sons moved to Pallippuram, on the western bank of the Vaikom backwaters.&nbsp;<a style="color:#045b7e;" href="pages/aboutus.html">...read more</a>
		</div>
      </div>
      
      <div id="noticeBoardNew" style="position:relative;  float:left;  width:18%; height:50%; background-color:#FFF; background-image:url('images/notice4.png');background-repeat:repeat-y;">
      	<!--<div style="width:10%; background-image:url(images/notice3.png); background-repeat:repeat-y; position:relative; float:left; min-height:300px; ">
        &nbsp;
        </div>-->
        <div style="width:100%; position:relative; float:left;">
        		<div class="notice">Notice board</div>
               	
                <marquee style="position: relative; padding-right:10px; "  height="160" behavior="scroll" align="center" direction="up" scrollamount="2" scrolldelay="5"  onmouseover="this.stop()" onmouseout="this.start()"><br>
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
                
        </div>
		
        <div style="position:relative; padding:18px;">
	       	<h3 align="center" style="font-family: 'Cabin Sketch', arial, serif; font-size:20px; padding-left:12px;">Our Missionaries</h3>
	                               <span style="font-family: 'Varela', arial, serif; font-size:13px; text-align:justify;" ><a href="#">This</a> is a write up by our Kudumbayogam President, Mr. K.K.Cyriac Kadankavil. It summarises the details of missionaries that our family has given to the service of the society and the world at large.
	           </span>
		   <br /><br />
		              			Link:<a href="pages/missionaries.html" style="color:#045b7e;">&nbsp; <span style="font-size:12px;">Click here to view the document.</span></a></span>
		 </div>
                 <!--<div style="position:relative; padding:18px;">
                	<h3 align="center" style="font-family: 'Cabin Sketch', arial, serif; font-size:20px; padding-left:12px;">Latest Obituary</h3>
                                        <span style="font-family: 'Varela', arial, serif; font-size:13px; text-align:justify;" >
                    	Anjiri: &nbsp;<strong>Annamma Joseph</strong> (94), of Njavallil Pazhayidam, passed away on June 14, 2013.  Her funeral service will commence at the residence of P.J.Mathew by 3:00 PM on June 15, 2013. She will be laid to rest at St. Martin de Porres church, Anjiri.
                    </span>
                    
        		 </div>
					 -->
                 <!--
                 <div style="position:relative; padding:18px;">
                	<h3 align="center" style="font-family: 'Cabin Sketch', arial, serif; font-size:20px; padding-left:12px;">Latest Obituary</h3>
                                        <span style="font-family: 'Varela', arial, serif; font-size:13px; text-align:justify;" >
                    	Aluva: <strong>Aniyamma Joy</strong> (59), of Pala Koonthanam Thudiyanplackel, passed away on May 09, 2013. She is the wife of T.A Joy(Retd. Federal Bank Chief Manager) The funeral service will commence at home by 4:00PM on May 13, 2012. The veteren will be laid to rest at Sacred Heart Church, Karoor. HE Mar Joseph Kallarangatt will officiate the funeral.
                    </span>
                    
        		 </div>
                 <div style="position:relative; padding:18px;">
                	<h3 align="center" style="font-family: 'Cabin Sketch', arial, serif; font-size:20px; padding-left:12px;">Congratulations</h3>
                                 <a style="color:#000" href="./pages/spanmix.html">  <div>     <span style="font-family: 'Varela', arial, serif; font-size:13px; text-align:justify;" > Kudumbayogam congratulates<br /> <strong>Sri. Jose Thomas Njavally</strong><br />Managing Director, Spanmix.<br /> on receiving <strong>'Best Entrepreneur Award'</strong> instituted  by KSSIA. <span style="font-size:11px; color:#03C">Click here for more details.</span><br /><div align="center"><img  src="images/smallJose.JPG" /></div>
                    </span></div></a>
                    
        		 </div>-->
        
      </div>
      <div id="BottomStripNew" style="position:relative;  float:left;  width:100%; height:50%; min-width:100%; margin-left:auto; margin-right:auto; ">
          <div style=" padding-top:16px; min-height:110px; background-image:url(images/bottline.png); background-repeat:repeat-x; min-width:100%;  width:100%;">
            <a style="color:#045b7e;" href="pages/photogallery.html">
            <div  class="tile">
                <span style="padding-left:10px;" ><img src="images/tile/photo.png" /></span>
                <span style="padding-left:4px;" class="titlewriting">Photo Gallery</span>
            </div></a>
            <a style="color:#045b7e;" href="pages/branches.html">
            <div  class="tile">
                <img src="images/tile/branch.png" />
                <span class="titlewriting" style=" padding-left:2px;">Branches</span>
            </div></a>
            <a style="color:#045b7e;" target="_blank" href="https://www.facebook.com/groups/njavallil/"><div  class="tile">
                <img src="images/tile/forum.png" />
                <span class="titlewriting" style=" padding-left:20px;">Group</span>	
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
                <img src="images/tile/download.png" />
                <span class="titlewriting" style=" padding-left:20px;">Downloads</span>
            </div></a>
        </div>
      </div>
      <div id="footerNew" style="position:relative;  float:left;  width:100%; height:50%; min-width:1366px; ">
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
      </div>
</div>
<!-- The notice board starts -->		
			
<!-- The notice board ends -->

</body>
</html>
<?php
	// 5. Close connection
	mysql_close($connection);
?>