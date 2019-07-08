jQuery(function($){
		$.supersized({
		// Functionality
		slide_interval          :   3000,		// Length between transitions
		transition              :   1, 			// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
		transition_speed		:	700,		// Speed of transition
															   
		// Components							
		slide_links				:	'blank',	// Individual links for each slide (Options: false, 'num', 'name', 'blank')
		slides 					:  	[			// Slideshow Images
{image : 'images/gallery/entryhalldistorted.jpg', title : '', thumb : 'images/gallery/thumbs/entryhalldistorted.jpg'},//1
{image : 'images/gallery/exteriorariel2.jpg', title : '', thumb : 'images/gallery/thumbs/exteriorariel2.jpg'},//2
{image : 'images/gallery/Gameroom2.jpg', title : '', thumb : 'images/gallery/thumbs/Gameroom2.jpg'},//4
{image : 'images/gallery/kitchtable.jpg', title : '', thumb : 'images/gallery/thumbs/kitchtable.jpg'},//5
{image : 'images/gallery/LRtowarddiningwindows.jpg', title : '', thumb : 'images/gallery/thumbs/LRtowarddiningwindows.jpg'},//6
{image : 'images/gallery/masterhisherbath.jpg', title : '', thumb : 'images/gallery/thumbs/masterhisherbath.jpg'},//7
{image : 'images/gallery/MercerIslandELC_050.jpg', title : '', thumb : 'images/gallery/thumbs/MercerIslandELC_050.jpg'},//8
{image : 'images/gallery/MercerIslandELC_181.jpg', title : '', thumb : 'images/gallery/thumbs/MercerIslandELC_181.jpg'},//9
{image : 'images/gallery/MercerIslandELC_207.jpg', title : '', thumb : 'images/gallery/thumbs/MercerIslandELC_207.jpg'},//11
{image : 'images/gallery/officecredenzadesk.jpg', title : '', thumb : 'images/gallery/thumbs/officecredenzadesk.jpg'},//12
{image : 'images/gallery/outdoorbbqseatingarea.jpg', title : '', thumb : 'images/gallery/thumbs/outdoorbbqseatingarea.jpg'},//13
{image : 'images/gallery/theaterscreanfilled.jpg', title : '', thumb : 'images/gallery/thumbs/theaterscreanfilled.jpg'}

												]
					
				});
		    });
		    