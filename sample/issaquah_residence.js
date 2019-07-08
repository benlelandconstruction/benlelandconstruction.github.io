	jQuery(function($){
		$.supersized({
		// Functionality
		slide_interval          :   3000,		// Length between transitions
		transition              :   1, 			// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
		transition_speed		:	700,		// Speed of transition
															   
		// Components							
		slide_links				:	'blank',	// Individual links for each slide (Options: false, 'num', 'name', 'blank')
		slides 					:  	[			// Slideshow Images

{image : 'images/gallery/Housefront6.jpg', title : '', thumb : 'images/gallery/thumbs/Housefront6.jpg'},//23
{image : 'images/gallery/leland_049.jpg', title : '', thumb : 'images/gallery/thumbs/leland_049.jpg'},//38
{image : 'images/gallery/leland_076.jpg', title : '', thumb : 'images/gallery/thumbs/leland_076.jpg'},//39
{image : 'images/gallery/leland_087.jpg', title : '', thumb : 'images/gallery/thumbs/leland_087.jpg'},//40
{image : 'images/gallery/leland_145.jpg', title : '', thumb : 'images/gallery/thumbs/leland_145.jpg'},//41
{image : 'images/gallery/leland_181.jpg', title : '', thumb : 'images/gallery/thumbs/leland_181.jpg'},//42
{image : 'images/gallery/leland_232.jpg', title : '', thumb : 'images/gallery/thumbs/leland_232.jpg'}//43

												]
					
				});
		    });