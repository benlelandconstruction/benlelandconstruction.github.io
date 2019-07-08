<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome to Ben Leland Construction</title>
<link rel="stylesheet" href="css/supersized.css" type="text/css" media="screen" />
<link rel="stylesheet" href="theme/supersized.shutter.css" type="text/css" media="screen" />
		
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.min.js"></script>
<script type="text/javascript" src="js/supersized.3.2.7.min.js"></script>
<script type="text/javascript" src="theme/supersized.shutter.min.js"></script>
<script type="text/javascript">
	jQuery(function($){
		$.supersized({
		// Functionality
		slide_interval          :   3000,		// Length between transitions
		transition              :   1, 			// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
		transition_speed		:	700,		// Speed of transition
															   
		// Components							
		slide_links				:	'blank',	// Individual links for each slide (Options: false, 'num', 'name', 'blank')
		slides 					:  	[			// Slideshow Images
{image : 'images/gallery/entryhalldistorted.jpg', title : 'Image Credit: Ben Lelan Construction', thumb : 'images/gallery/thumbs/entryhalldistorted.jpg'},
{image : 'images/gallery/exteriorariel2.jpg', title : 'Image Credit: Ben Lelan Construction', thumb : 'images/gallery/thumbs/exteriorariel2.jpg'},
{image : 'images/gallery/fullexteriorfromwater.jpg', title : 'Image Credit: Ben Lelan Construction', thumb : 'images/gallery/thumbs/fullexteriorfromwater.jpg'},
{image : 'images/gallery/Gameroom2.jpg', title : 'Image Credit: Ben Lelan Construction', thumb : 'images/gallery/thumbs/Gameroom2.jpg'},
{image : 'images/gallery/kitchtable.jpg', title : 'Image Credit: Ben Lelan Construction', thumb : 'images/gallery/thumbs/kitchtable.jpg'},
{image : 'images/gallery/LRtowarddiningwindows.jpg', title : 'Image Credit: Ben Lelan Construction', thumb : 'images/gallery/thumbs/LRtowarddiningwindows.jpg'},
{image : 'images/gallery/masterhisherbath.jpg', title : 'Image Credit: Ben Lelan Construction', thumb : 'images/gallery/thumbs/masterhisherbath.jpg'},
{image : 'images/gallery/MercerIslandELC_050.jpg', title : 'Image Credit: Ben Lelan Construction', thumb : 'images/gallery/thumbs/MercerIslandELC_050.jpg'},
{image : 'images/gallery/MercerIslandELC_181.jpg', title : 'Image Credit: Ben Lelan Construction', thumb : 'images/gallery/thumbs/MercerIslandELC_181.jpg'},

{image : 'images/gallery/MercerIslandELC_187.jpg', title : 'Image Credit: Ben Lelan Construction', thumb : 'images/gallery/thumbs/MercerIslandELC_187.jpg'},
{image : 'images/gallery/MercerIslandELC_207.jpg', title : 'Image Credit: Ben Lelan Construction', thumb : 'images/gallery/thumbs/MercerIslandELC_207.jpg'},
{image : 'images/gallery/officecredenzadesk.jpg', title : 'Image Credit: Ben Lelan Construction', thumb : 'images/gallery/thumbs/officecredenzadesk.jpg'},
{image : 'images/gallery/outdoorbbqseatingarea.jpg', title : 'Image Credit: Ben Lelan Construction', thumb : 'images/gallery/thumbs/outdoorbbqseatingarea.jpg'},
{image : 'images/gallery/theaterscreanfilled.jpg', title : 'Image Credit: Ben Lelan Construction', thumb : 'images/gallery/thumbs/theaterscreanfilled.jpg'}
												]
					
				});
		    });
		    
</script>
<style type="text/css">



</style>

<link href="css/styles.css" rel="stylesheet" type="text/css" />
</head>

<body id="gallery">
<!-- controls-->

<div id="prevthumb"></div>
	<div id="nextthumb"></div>
	
	<!--Arrow Navigation-->
	<a id="prevslide" class="load-item"></a>
	<a id="nextslide" class="load-item"></a>
	
	<div id="thumb-tray" class="load-item">
		<div id="thumb-back"></div>
		<div id="thumb-forward"></div>
	</div>
   
	
	<!--Time Bar-->
	<div id="progress-back" class="load-item">
		<div id="progress-bar"></div>
	</div>
	
	<!--Control Bar-->
	<div id="controls-wrapper" class="load-item">
		<div id="controls">
			
			<a id="play-button"><img id="pauseplay" src="img/pause.png"/></a>
		
			<!--Slide counter-->
			<div id="slidecounter">
				<span class="slidenumber"></span> / <span class="totalslides"></span>
			</div>
			
			<!--Slide captions displayed here-->
			<div id="slidecaption"></div>
			
              <!--Thumb Tray button-->
              <a id="tray-button"><img id="tray-arrow" src="img/button-tray-down.png"/></a>
              
			<!--Navigation-->
			<ul id="slide-list"></ul>
			
		</div>
	</div>

<!-- end controls -->



<?php include 'includes/nav.php';?>
</body>
</html>
