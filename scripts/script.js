$(document).ready(function() {
	
	// Returns home page to default state when not hovering on a link
	function homeDefaultState() {
		$('html').css('background','#CCCCCC');
		$('nav a').css({'color':'#FFF','text-shadow':'none'});
		$('h1').css({'color':'#000','text-shadow':'none'});
	}

	/* 
	 * Found animation end info here http://blog.teamtreehouse.com/using-jquery-to-detect-when-css3-animations-and-transitions-end 
	 * Plays video when animation ends if hovered over link. Returns to normal style after not hovering.
	 */
	$('#contact.home').one('webkitAnimationEnd oanimationend msAnimationEnd animationend', function(){
  	$('#about.home a').on('mouseover', function() {
			$('#aboutVideo').fadeIn('fast');
			$('nav a').css({'color':'#FFF','text-shadow':'1px 1px 1px #000'});
			$('h1').css({'color':'#FFB840','text-shadow':'1px 1px 1px #000'});
		})
		.on('mouseleave', function() {
			$('#aboutVideo').fadeOut('fast');
			homeDefaultState();
		})
  });

	/* 
	 * Found animation end info here http://blog.teamtreehouse.com/using-jquery-to-detect-when-css3-animations-and-transitions-end 
	 * Plays video when animation ends if hovered over link. Returns to normal style after not hovering.
	 */
	$('#contact.home').one('webkitAnimationEnd oanimationend msAnimationEnd animationend', function(){
		$('#work.home a').on('mouseover', function() {
			$('#workVideo').fadeIn('fast');
			$('nav a').css({'color':'#FFF','text-shadow':'1px 1px 1px #000'});
			$('h1').css({'color':'#9fff80','text-shadow':'1px 1px 1px #000'});
		})
		.on('mouseleave', function() {
			$('#workVideo').fadeOut('fast');
			homeDefaultState();
		});
	});

	/* 
	 * Found animation end info here http://blog.teamtreehouse.com/using-jquery-to-detect-when-css3-animations-and-transitions-end 
	 * Plays video when animation ends if hovered over link. Returns to normal style after not hovering.
	 */
	$('#contact.home').one('webkitAnimationEnd oanimationend msAnimationEnd animationend', function(){
		$('#contact.home a').on('mouseover', function() {
			$('html').css({'background-color':'#009999'});
			$('h1').css({'color':'#000'});
			$('#contactGraphic').fadeIn();
			$('nav a').css({'color':'#FFF','text-shadow':'1px 1px 1px #000'});
			// jQuery Pluggin type.js
			$("#email").typed({
	      strings: ["Hi Stacy,<br /><br />Nice website. Talk to you later. Bye.<br /><br />- Anonymous"],
	      typeSpeed: 50
	  	});
		})
		.on('mouseleave', function() {
			$('#contactGraphic').fadeOut();
			homeDefaultState();
		});
	});

	// Pop out menu
	$('.menu-btn').on('click', function() {
		var nav = $('nav.pop');
		if(nav.hasClass('pop-in')){
			nav.removeClass('pop-in').addClass('pop-out');
		}
		else {
			nav.removeClass('pop-out').addClass('pop-in');
		}
		$(this).toggleClass('change');
		console.log($(this).children().css('background-color'))
		if($(this).children().css('background-color') == 'rgb(255, 255, 255)') {
			$(this).children().css('background-color',"#000");
		}
		else {
			$(this).children().css('background-color','#FFF');
		}
	});

});
