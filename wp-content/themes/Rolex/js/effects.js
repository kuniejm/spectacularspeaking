jQuery(document).ready(function() {

jQuery('.squarebanner ul li:nth-child(even)').addClass('rbanner');

/* Navigation */
jQuery('#submenu ul.sfmenu').superfish({ 
		delay:       500,								// 0.1 second delay on mouseout 
		animation:   {height:'show'},	// fade-in and slide-down animation 
		dropShadows: true								// disable drop shadows 
	});	

jQuery('#cycle')

.cycle({ 
    fx:     'toss', 
    timeout: 6000, 
	delay: -5000,
	animOut: { top: -50, right: 0, height: 350, width: 1000 },
	animIn: { top:10, right: 300, height: 350, width: 1000 } 
	});	
	
	
});