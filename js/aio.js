//set the slide height to the browser's height
function setSldHeight(){                            
	$('.carousel').height(window.innerHeight);
	$('.item').height(window.innerHeight);
	$('.sl-img').height(window.innerHeight);
};

$(document).ready(function(){
	setSldHeight();
	$('body').scrollspy({ target: '.navbar-collapse'}); // scrospy the navbar
	$(window).resize(function() {                       //when the window resize, reset the slide height
		setSldHeight();
		});
	$('#nav').affix({                                   //set the affix of navbar
	    offset: {
	      top: window.innerHeight,
	      bottom: function(){return (this.bottom = $('footer').outerHeight(true))}
	    }
	  });
	$('#por-ga').isotope({                              //the function of Portfolio by isotope
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
	$(function(){                                       //scrolling the background of div by stellar
		$.stellar({
			horizontalScrolling: false,
			verticalOffset: 40
		});
	});
        //bootstrap3's showing message function 
	$('#ab-gina').popover({trigger:'hover',placement:'right',container: 'body',title:'Gina Gao',content:'Gina is a this is a test'});
	$('#ab-zere').popover({trigger:'hover',placement:'left',container: 'body',title:'Lee Huang',content:'Lee is a this is a test'});
        $("#submit").click(function(){             //send email function
		//alert("this is  a test");
		$.ajax({
			type:"post",
			data:{"name":$("#name").val(),"phone":$("#phone").val(),"email":$("#email").val(),"message":$("#message").val()},
			url:"http://localhost/zing/index.php/contact/mail",
			success:function(result){
				if(result==1){
				alert("Success. We will replay you ASAP. ");
				}else{
				alert("failed--0");
				}
			},
			error:function(){
				alert("ajax failed");
			}
			});
		});
});
