jQuery(function($){
		$.supersized({
		// Functionality
		slide_interval          :   3000,		// Length between transitions
		transition              :   1, 			// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
		transition_speed		:	700,		// Speed of transition
															   
		// Components							
		slide_links				:	'blank',	// Individual links for each slide (Options: false, 'num', 'name', 'blank')
		slides 					:  	[			// Slideshow Images


{image : 'images/gallery/diningroom2.jpg', title : '', thumb : 'images/gallery/thumbs/diningroom2.jpg'},//18
{image : 'images/gallery/entryway.jpg', title : '', thumb : 'images/gallery/thumbs/entryway.jpg'},//19
{image : 'images/gallery/greatroom1.jpg', title : '', thumb : 'images/gallery/thumbs/greatroom1.jpg'},//21
{image : 'images/gallery/greatroom3.jpg', title : '', thumb : 'images/gallery/thumbs/greatroom3.jpg'},//22
{image : 'images/gallery/greatroom3.jpg', title : '', thumb : 'images/gallery/thumbs/greatroom3.jpg'},//25
{image : 'images/gallery/IMG_1203.jpg', title : '', thumb : 'images/gallery/thumbs/IMG_1203.jpg'},//29
{image : 'images/gallery/IMG_1206.jpg', title : '', thumb : 'images/gallery/thumbs/IMG_1206.jpg'},//30
{image : 'images/gallery/IMG_1212.jpg', title : '', thumb : 'images/gallery/thumbs/IMG_1212.jpg'},//31
{image : 'images/gallery/IMG_1233.jpg', title : '', thumb : 'images/gallery/thumbs/IMG_1233.jpg'},//32
{image : 'images/gallery/kitchen.jpg', title : '', thumb : 'images/gallery/thumbs/kitchen.jpg'},//37
{image : 'images/gallery/lof.jpg', title : '', thumb : 'images/gallery/thumbs/lof.jpg'},//44
{image : 'images/gallery/office3.jpg', title : '', thumb : 'images/gallery/thumbs/office3.jpg'},//45
{image : 'images/gallery/winecellar2.jpg', title : '', thumb : 'images/gallery/thumbs/winecellar2.jpg'},//49
{image : 'images/gallery/winecellar.jpg', title : '', thumb : 'images/gallery/thumbs/winecellar.jpg'}//50

												]
					
				});
		    });