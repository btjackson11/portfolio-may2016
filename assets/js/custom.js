// TYPED.JS SCRIPT
$(document).ready(function(){
	$(".element").typed({
		strings: [
			"<span class='name'>Benjamin<strong>_</strong>Jackson</span>", "<span class='sneaker'>Designer<strong>_</strong>Developer</span>", "<span class='current'>Currently<strong>_</strong>Fisher</span>", "<span class='education'>Education<strong>_</strong>ASU</span>", "<span class='name'>Benjamin<strong>_</strong>Jackson</span>"
		],

		typeSpeed: 50, // typing speed
		backDelay: 1000, // pause before backspacing
		startDelay: 0,
		loop: false, // loop on or off (true or false)
		loopCount: false, // number of loops, false = infinite
		callback: function(){ } // call function after typing is done
	});
});

// SMOOTH SCROLL
$(function() {
	$('a[href*="#"]:not([href="#"])').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			if (target.length) {
				$('html, body').animate({
					scrollTop: target.offset().top
				}, 1000);
				return false;
			}
		}
	});
});

// SINGLE PROJECT PAGE SHOW PROJECT INFORMATION ONCE SCROLLED DOWN INTO PHOTOS
$('#content').waypoint(function(direction) {
	if (direction === 'down') {
	    $(".masthead-type").css({ 
	    	opacity: "0"
	    });
	    $(".project-information-button").css({
		    opacity: "1"
	    });
		$(".project-information").css({ 
	    	opacity: "1"
	    });
	    $(".header-type").css({ 
	    	opacity: "1"
	    });
	    $(".description").css({ 
	    	opacity: "1"
	    });
	} else{
	    $(".masthead-type").css({ 
	    	opacity: "1"
	    });
	    $(".project-information-button").css({
		    opacity: "0"
	    });
		$(".project-information").css({ 
	    	opacity: "0"
	    });
	    $(".header-type").css({ 
	    	opacity: "0"
	    });
	    $(".description").css({ 
	    	opacity: "0"
	    });
	}
},  { 
	offset: 0 
});

// CHANGING LOGO COLOR BASED ON SECTION
$('#projects').waypoint(function(direction) {
	if (direction === 'down') {
	    $(".logo").css({ 
	    	fill: "#9ca2ab"
	    });
	} else{
	    $(".logo").css({ 
	    	fill: "#ffffff"
	    });
	}
},  { 
	offset: 50 
});
$('#profile').waypoint(function(direction) {
	if (direction === 'down') {
	    $(".logo").css({ 
	    	fill: "#cccccc"
	    });
	} else{
	    $(".logo").css({ 
	    	fill: "#9ca2ab"
	    });
	}
},  { 
	offset: 50 
});
$('#content').waypoint(function(direction) {
	if (direction === 'down') {
	    $(".logo").css({ 
	    	fill: "#9ca2ab"
	    });
	    $(".sub-nav a").css({ 
	    	color: "#9ca2ab"
	    });
	} else{
	    $(".logo").css({ 
	    	fill: "#ffffff"
	    });
	    $(".sub-nav a").css({ 
	    	color: "#ffffff"
	    });
	}
},  { 
	offset: 50 
});


// jQuery for showing and hiding single-project information box
$(document).ready(function(){
	$('.information-close').click(function(){
		$('.project-information').toggleClass('showme');
		$('.project-information-button').toggleClass('hideme');
	});	
	$('.project-information-button').click(function(){
		$('.project-information').toggleClass('showme');
		$('.project-information-button').toggleClass('hideme');
	})	
});
