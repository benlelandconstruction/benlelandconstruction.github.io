	jQuery(function($){
		$.supersized({
		// Functionality
		slide_interval          :   3000,		// Length between transitions
		transition              :   1, 			// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
		transition_speed		:	700,		// Speed of transition
															   
		// Components							
		slide_links				:	'blank',	// Individual links for each slide (Options: false, 'num', 'name', 'blank')
		slides 					:  	[			// Slideshow Images

{image : 'images/gallery/frontofhouse4.jpg', title : '', thumb : 'images/gallery/thumbs/frontofhouse4.jpg'},//20
{image : 'images/gallery/IMG_1137.jpg', title : '', thumb : 'images/gallery/thumbs/IMG_1137.jpg'},//24
{image : 'images/gallery/IMG_1177copy.jpg', title : '', thumb : 'images/gallery/thumbs/IMG_1177copy.jpg'},//27
{image : 'images/gallery/IMG_1197.jpg', title : '', thumb : 'images/gallery/thumbs/IMG_1197.jpg'},//28
{image : 'images/gallery/IMG_1255.jpg', title : '', thumb : 'images/gallery/thumbs/IMG_1255.jpg'},//33
{image : 'images/gallery/IMG_5679.jpg', title : '', thumb : 'images/gallery/thumbs/IMG_5679.jpg'},//35
{image : 'images/gallery/IMG_5739.jpg', title : '', thumb : 'images/gallery/thumbs/IMG_5739.jpg'},//36
{image : 'images/gallery/Tschetter002.jpg', title : '', thumb : 'images/gallery/thumbs/Tschetter002.jpg'},//46
{image : 'images/gallery/Tschetter003(1).jpg', title : '', thumb : 'images/gallery/thumbs/Tschetter003(1).jpg'}//47


												]
					
				});
		    });