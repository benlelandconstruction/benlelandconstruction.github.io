	jQuery(function($){
		$.supersized({
		// Functionality
		slide_interval          :   3000,		// Length between transitions
		transition              :   1, 			// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
		transition_speed		:	700,		// Speed of transition
															   
		// Components							
		slide_links				:	'blank',	// Individual links for each slide (Options: false, 'num', 'name', 'blank')
		slides 					:  	[			// Slideshow Images


// added images
{image : 'images/gallery/2007.26_02.jpg', title : '', thumb : 'images/gallery/thumbs/2007.26_02.jpg'},//15
{image : 'images/gallery/2007.26_06.jpg', title : '', thumb : 'images/gallery/thumbs/2007.26_06.jpg'},//16
{image : 'images/gallery/2007.26_08.jpg', title : '', thumb : 'images/gallery/thumbs/2007.26_08.jpg'},//17

{image : 'images/gallery/2007.26_01.jpg', title : '', thumb : 'images/gallery/thumbs/2007.26_01.jpg'},
{image : 'images/gallery/2007.26_03.jpg', title : '', thumb : 'images/gallery/thumbs/2007.26_03.jpg'},
{image : 'images/gallery/2007.26_07.jpg', title : '', thumb : 'images/gallery/thumbs/2007.26_07.jpg'},
{image : 'images/gallery/2007.26_09.jpg', title : '', thumb : 'images/gallery/thumbs/2007.26_09.jpg'},
{image : 'images/gallery/IMG_1398.jpg', title : '', thumb : 'images/gallery/thumbs/IMG_1398.jpg'},
{image : 'images/gallery/IMG_1402.jpg', title : '', thumb : 'images/gallery/thumbs/IMG_1402.jpg'}


												]
					
				});
		    });