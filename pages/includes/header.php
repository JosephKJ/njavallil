<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Njavallil,kudumbam">
<meta name="description" content="Add stuff.">
<link rel="icon" type="image/png" href="../../images/k.png" />
<?php
$id=$_GET['id'];
if($id==1)
{
	$s="Pazhayidam";
	$add="Shri. Josy Cheriayan</strong><br /> Njavallil Pazayidom, Mundupalam.<br />	Ph: 04822-217669   Mob: 9496464446";
}
else if($id==2)
{
	$s="Puthenpurayil";
	$add="Shri. Ittiyavira Manuval</strong> <br />Njavallil Puthenpurayil, Karoor.<br />	Ph: 04822-214661 Mob:9446603008";

}
else if($id==3)
{
	$s="Theruvankunnel";
	$add="Shri Antony T.D</strong> <br /> Njavallil Theruvankunnel, Nediyasala.<br />Ph: 04862-274064 Mob: 9447979768";

}
else if($id==4)
{
	$s="Manjakunnel";
	$add="Shri. Kuriachan</strong><br /> Njavallil Manjakunnel, Mundupalam.<br />	Ph:04822-215795 Mob:9447141623";

}
else if($id==5)
{
	$s="Thekkel";
	$add="Shri. Jose Kurian</strong><br /> Njavallil Thekkel, Mundupalam.<br />	Ph:04822-212657 Mob:9447147692";

}
else if($id==6)
{
	$s="Panamattam";
	$add="Mrs. Mercy Joseph</strong><br /> Njavallil Koonthanam, Karoor.<br />	Ph: 04822-212669   Mob: 9495395616";

}
else if($id==7)
{
	$s="Vilangupara";
	$add="Shri. Seby Cheriyan</strong><br /> Njavallil Vilangupara, Karoor.<br />Ph:04822 212671 Mob:9447020140";

}
else if($id==8)
{
	$s="Puthenpurakkal";
	$add="Shri. Alex K.C</strong><br /> Njavallil Koonthanam, Karoor.<br />	Ph:04822-214194, Mob:9447420943";

}
else if($id==9)
{
	$s="Tharavadu";
	$add="Shri. Laly Cyriac</strong><br /> Njavallil Chenakalayil, Pala.<br />	Ph: 04822 214020, Mob:9447599258";
}
else
	$s="Njavallil Family";
	
?>

<title><?php echo($s);?></title>
<link rel="stylesheet" href="../../styles/style.css" type="text/css" media="screen"/>
<link rel="stylesheet" type="text/css" href="../../styles/feedbackstyles.css">    
<link href='http://fonts.googleapis.com/css?family=Redressed&v1' rel='stylesheet' type='text/css'>

<style>
.name1
{
	font-family: 'Redressed', arial, serif;
	font-size:260%; font:bold;
	padding-top:20px;
	text-align:center;
	color:black;
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
	background-image:url('../../images/navbg.png');
	background-repeat:repeat-x;
	cursor:pointer;
}
</style>

<!-- the download buttom(C)Kj2011-->
  <link rel="stylesheet" href="../../styles/scroll_dl.css" type="text/css" media="screen" charset="utf-8" />   
  <script src="../../javascript/jquery-1.4.min_dl.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript" src="../../javascript/jquery-ui-1.7.2.custom.min_dl.js"></script>
  <script type="text/javascript" src="../../javascript/script_dl.js"></script>

</head>

<body>
	<div id="container" >
    <div id="header" >
      <div id="logo">
      <a href="http://www.njavallil.com/"><img src="../../images/logo.png" alt="Njavallil Kudumbayogam"></a>
      </div>
    
      <div id="socialicons">
       <div style="text-align:center; padding-top:5px; font-size:36px; color:#FFF;">Njavallil Family</div>
      </div>
    
    
      <div class="menu-bar">
          <ul>
            <li><a href="./../../index.php" title="Home">Home</a></li>
            <li><a href="./../aboutus.html" title="About Us">About Us</a></li>
            <li><a href="./../photogallery.html" title="Photo Gallery">Photo Gallery</a> </li>
            <li><a href="./../committee.html" title="Committee Members">Committee Members</a></li>
            <li><a href="./../contactus.php" title="Contact Us">Contact Us</a></li>          
          </ul>
      </div>
      <div class="header-bottom" style="color: black;">
      	<span style="font-size:14px; letter-spacing:1px ">
      	<span style="position:relative; bottom:6px;font-weight:bold;">Navigation bar: </span>	
      	<a href="../../index.php" style="color:black;"><span class="navst1"><span class="navb">Home </span>
      	<span><img src="../../images/arrow.png" /></span></span></a>
      	<a href="../branches.html" style="color:black;"><span class="navst1"><span class="navb">Branches </span>
      	<span ><img src="../../images/arrow.png" /></span></span></a>
		<span class="navst1"><span class="navb"><?php echo($s);?> Family </span></span>
		</span>
      	
      </div>
    </div>
	</div>