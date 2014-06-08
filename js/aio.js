function setSldHeight(){
	$('.carousel').height(window.innerHeight);
	$('.item').height(window.innerHeight);
	$('.sl-img').height(window.innerHeight);
};
/*
function choosePortfolio(){
	$('#p-all').click(function(){
		if($('.p-web').css("left")!='auto'){
			$('.p-web').animate({left:'0%'});
		};
		if($('.p-photo').css("right")!='auto'){
			$('.p-photo').animate({right:'0%'});
		};
		if($('.p-product').css("left")!='auto'){
			$('.p-product').animate({left:'0%',bottom:'0px'});
		};
		$('#por-ga').children().animate({opacity:'1'},'slow');
	});
	$('#p-web').click(function(){
		x=$('#web1').position();
		alert(x.left);
		alert(x.top);
		$('.p-web').animate({opacity:'1',left:'25%'},'slow');
		if($('.p-photo').css("right")!='auto'){
			$('.p-photo').animate({right:'0%'});
		};
		if($('.p-product').css("left")!='auto'){
			$('.p-product').animate({left:'0%',bottom:'0px'});
		};
		$('#por-ga').children().not('.p-web').animate({opacity:'0'},'slow');
	});
	$('#p-photo').click(function(){		
		$('.p-photo').animate({opacity:'1',right:'25%'},'slow');
		if($('.p-web').css("left")!='auto'){
			$('.p-web').animate({left:'0%'});
		};
		if($('.p-product').css("left")!='auto'){
			$('.p-product').animate({left:'0%',bottom:'0px'});
		};
		$('#por-ga').children().not('.p-photo').animate({opacity:'0'},'slow');	
	});
	$('#p-product').click(function(){		
		$('.p-product').animate({opacity:'1',left:'25%',bottom:'220px'},'slow');
		if($('.p-photo').css("right")!='auto'){
			$('.p-photo').animate({right:'0%'});
		};
		if($('.p-web').css("left")!='auto'){
			$('.p-web').animate({left:'0%'});
		};
		$('#por-ga').children().not('.p-product').animate({opacity:'0'},'slow');	
	});
};
*/
$(document).ready(function(){
	setSldHeight();
	$('body').scrollspy({ target: '.navbar-collapse'});
	$(window).resize(function() {
		setSldHeight();
		});
	$('#nav').affix({
	    offset: {
	      top: window.innerHeight,
	      bottom: function(){return (this.bottom = $('footer').outerHeight(true))}
	    }
	  });
	$('#por-ga').isotope({
		  // options
		  animationEngine:'best-available',
		  resizable:'ture',
		  resizesContainer:'ture',
		  layoutMode:'fitRows'
		});
	$('#por-menu button').click(function(){
		  var selector = $(this).attr('data-filter');
		  $('#por-ga').isotope({ filter: selector });
		  return false;
		});
	$(function(){
		$.stellar({
			horizontalScrolling: false,
			verticalOffset: 40
		});
	});
	$('#ab-gina').popover({trigger:'hover',placement:'right',container: 'body',title:'Gina Gao',content:'Gina is a this is a test'});
	$('#ab-zere').popover({trigger:'hover',placement:'left',container: 'body',title:'Lee Huang',content:'Lee is a this is a test'});
});
