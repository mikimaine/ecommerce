/**/
/* remove envato iframe */
/**/
if (undefined !== window.location.ancestorOrigins && undefined !== window.location.ancestorOrigins[0]) {
	if ( navigator.userAgent.match(/(iPod|iPhone|iPad)/) && (/themeforest/.test(window.location.ancestorOrigins[0])) ) {
		window.top.location.href = "http://html.creaws.com/the8/";
	}
}


/**/
/* google map */
/**/
var winWidth, winHeight;
var nua = navigator.userAgent;
var isAndroid = nua.indexOf("Android") > -1;

/**/
/* google map */
/**/
function init_map()
{
	var coordLat = -37.81261128155935;
	var coordLng = 144.96260404586792;
	if( jQuery(window).width() < 756 )
	{
		delta = 0;
	}
	
	var point = new google.maps.LatLng(coordLat,coordLng);
	var center = new google.maps.LatLng(coordLat,coordLng);
	
	var mapOptions = {	
		zoom: 15,
		center: center,
		scrollwheel: false,
		mapTypeId: google.maps.MapTypeId.ROADMAP
  }
  var map = new google.maps.Map(document.getElementById('map'), mapOptions);
  var image = 'images/gmap_default.png';
  var beachMarker = new google.maps.Marker({
  	map: map,
  	position: point
  });
}


/**/
/* next video slide */
/**/
function next_video_slide()
{
	$('#bgvideo li').each(function()
	{
		if( $(this).hasClass('active') )
		{
			var elem = $(this);
			elem.removeClass('active');
			if( elem.next().length )
				elem.next().addClass('active');
			else
				$('#bgvideo li:first-child').addClass('active');
			setTimeout(next_video_slide, 5000);
			return false;
		}
	});
}


/**/
/*  parallax  */
/**/
jQuery.fn.parallax = function (){
    winWidth = $(window).width();
    winHeight = $(window).height();

    this.each(function()
    {
      var bgobj = $(this);
      var bgContHeight = bgobj.outerHeight();
      var bgOfsTop = bgobj.offset().top

      var parallaxContainer = bgobj.find('.parallax-image');
      var imgContWidth = parallaxContainer.outerWidth();

      var img = bgobj.find('.parallax-image img');
      var imgHeight = img.outerHeight();
      var imgWidth = img.outerWidth();

      var leftCoef = parallaxContainer.attr("data-parallax-left");
      var topCoef = parallaxContainer.attr("data-parallax-top");
      var scrollCoef = parallaxContainer.attr("data-parallax-scroll-speed");

      function formula (a,b,c){
        return (a-b)*c
      }
      
      var leftOfs = -formula(imgWidth,imgContWidth,leftCoef)
      var topOfs  = -formula(imgHeight,bgContHeight,topCoef)

      var corectir = (((imgHeight - bgContHeight) - (imgHeight - bgContHeight)*(scrollCoef))*topCoef)

      var const_1 = formula(imgHeight,bgContHeight,scrollCoef)
      var const_2 = bgOfsTop - winHeight
      var const_3 = winHeight + bgContHeight
      var const_4 = const_1/const_3;
      var const_5 = const_4*const_2;
      var const_6 = const_5 - corectir;

      if (winWidth>1024){
        img.css({'height':'auto' , 'width':'auto' });
        var imgWidth = img.outerWidth();
        var imgContWidth = parallaxContainer.outerWidth();

        if (imgWidth != 0) {
          var leftOfs = -formula(imgWidth,imgContWidth,leftCoef)
          var parOfs = (const_6 - const_4*$(window).scrollTop()).toFixed(3); 
          parallaxContainer.css({'-webkit-transform':'translateY('+ parOfs + 'px)','-moz-transform':'translateY('+ parOfs + 'px)','-ms-transform':'translateY('+ parOfs + 'px)','transform':'translateY('+ parOfs + 'px)','left':+leftOfs+'px'});
        };

        if (imgWidth < bgobj.outerWidth()) {
          img.css('width', "100%");
          parallaxContainer.css({'left':'0px'});
        };

      }else{
        img.removeAttr('width');
        img.removeAttr('height');
        parallaxContainer.removeAttr('left');

        img.css({'width':+imgContWidth+'px' });
        parallaxContainer.css({'left':'0px','-webkit-transform':'translateY('+ parseInt((img.height() - bgobj.outerHeight())/-2) +'px)','-moz-transform':'translateY('+ parseInt((img.height() - bgobj.outerHeight())/-2) +'px)','-ms-transform':'translateY('+ parseInt((img.height() - bgobj.outerHeight())/-2) +'px)','transform':'translateY('+ parseInt((img.height() - bgobj.outerHeight())/-2) +'px)'});

        if (img.height() < parallaxContainer.height()) {
            img.css('width', img.width() * (bgobj.outerHeight() / img.height()));
            parallaxContainer.css({'left':+parseInt((img.width() - parallaxContainer.width())/-2) +'px','-webkit-transform':'translateY(0px)','-moz-transform':'translateY(0px)','-ms-transform':'translateY(0px)','transform':'translateY(0px)'});
        }   
      }

      $(window).scroll(function(){  
        if (winWidth>1024) {
          var parOfs = (const_6 - const_4*$(window).scrollTop()).toFixed(3); 
          parallaxContainer.css({'-webkit-transform':'translateY('+ parOfs + 'px)','-moz-transform':'translateY('+ parOfs + 'px)','-ms-transform':'translateY('+ parOfs + 'px)','transform':'translateY('+ parOfs + 'px)'});
        }     
      });
    });
};


/**/
/* on scroll */
/**/
$(window).scroll(function()
{
	if( $(this).scrollTop() > 200 )
	{
		$('#scroll-top').fadeIn();
	}
	else
	{
		$('#scroll-top').fadeOut();
	}

	if( winWidth < 768 )
		return false;

	if( $('#page-header-bottom').hasClass('fixed') )
	{
		if( $(this).scrollTop() < $('#page-header-bottom-holder').offset().top + 1 )
		{
			$('#page-header-bottom').removeClass('fixed');
		}
	}
	else
	{
		if( $(this).scrollTop() > $('#page-header-bottom-holder').offset().top - $('#page-header-bottom').outerHeight() )
		{
			$('#page-header-bottom').addClass('fixed');
		}
	}
});


/**/
/* on resize */
/**/
$(window).resize(function()
{
	winWidth = jQuery(window).width();
	winHeight = jQuery(window).height();
	
	
	/**/
	/* bgvideo */
	/**/	
	$('#bgvideo').height(winHeight);
	$('#bgvideo video').css('margin', '-' + $('#bgvideo video').height()/2 + 'px 0 0 -' + $('#bgvideo video').width()/2 + 'px');
	
	/* parallax */
	$('.parallaxed').parallax();
	
	/**/
	/* portfolio */
	/**/
	$('#portfolio .grid').isotope({
		masonry: {columnWidth: $('#portfolio .item').eq(0).outerWidth()}
	});
	
	
	/**/
	/* blog */
	/**/
	$('#blog .grid').isotope({
		masonry: {columnWidth: $('#blog .item').eq(0).outerWidth()}
	});
	
	
	/**/
	/* team */
	/**/
	$('#team ul').isotope({
		masonry: {columnWidth: $('#team .item').eq(0).outerWidth()}
	});
	
	
	/**/
	/* projects */
	/**/
	$('#projects ul').isotope({
		masonry: {columnWidth: $('#projects .item').eq(0).outerWidth()}
	});
});


/**/
/* on document load */
/**/
$(function()
{
	winWidth = jQuery(window).width();
	winHeight = jQuery(window).height();
	
	
	/**/
	/* scroll animations */
	/**/
	if( winWidth > 1024 )
	{
		new WOW().init();
	}

	/* parallax */
	$('.parallaxed').parallax();


	// parallax scene{
	if (document.getElementById('scene')) {
		var scene = document.getElementById('scene');
		var parallax = new Parallax(scene);
	};
	

	
	/**/
	/* bgvideo */
	/**/	
	$('#bgvideo').height(winHeight);
	$('#bgvideo video').css('margin', '-' + $('#bgvideo video').height()/2 + 'px 0 0 -' + $('#bgvideo video').width()/2 + 'px');
	$('#bgvideo').on('click', '.scroll', function()
	{
		$('html, body').animate({scrollTop: winHeight});
		return false;		
	});
	setTimeout(next_video_slide, 5000);   
	
	
	/**/
	/* fancybox */
	/**/
	$(".fancybox").fancybox();

	/**/
	/* background slider */
	/**/
	jQuery(document).ready( function (){
		window.slider_bg = {"ind":0, // index to start sliding at
							"source":["pic/slider/bg_slide1.jpg", //replace these slides with your own ones
									  "pic/slider/bg_slide2.jpg",
									  "pic/slider/bg_slide3.jpg",
									  "pic/slider/bg_slide4.jpg"],
							"bg_container":jQuery("#bg_container"),
							"bg_substrate":jQuery("#bg_substrate")};
		window.slider_bg.bg_container.css( "background-image","url(" + window.slider_bg.source[window.slider_bg.ind] + ")" );
	});
	
	function ifnext() {
			if ( window.slider_bg.ind < window.slider_bg.source.length-1 ){
				window.slider_bg.ind++;			
			}
			else{
				window.slider_bg.ind = 0;
			}		
			parallax_bg_controller ();
	};
	function ifprev() {
			if ( window.slider_bg.ind > 0 ){
				window.slider_bg.ind--;			
			}	
			else{
				window.slider_bg.ind = window.slider_bg.source.length-1;
			}
			parallax_bg_controller ();
	};
	function parallax_bg_controller (){
			window.slider_bg.bg_substrate.css( "background-image","url(" + window.slider_bg.source[window.slider_bg.ind] + ")" );
			window.slider_bg.bg_container.fadeOut(500, function (){
				window.slider_bg.bg_container.css( "background-image", "url(" + window.slider_bg.source[ window.slider_bg.ind ] + ")" );	
				window.slider_bg.bg_container.fadeIn(500);
			});			
	}
	
	/**/
	/* layerslider initialization */
	/**/
	var is_slider_first_run = true;
	var is_user_slide_nav = false;
	
	$('#layerslider').layerSlider({
		responsive: false,
		autoStart: true,
		slidedelay: 4000,
		responsiveUnder: 1201,
		layersContainer: 1201,
		skinsPath: 'js/layerslider/skins/',
		cbAnimStart: function() { 
			if (!is_user_slide_nav)
				if (!is_slider_first_run)
					ifnext();
			is_slider_first_run = false;
			is_user_slide_nav = false;
		},
		cbNext: function() { ifnext(); is_user_slide_nav = true; },
		cbPrev: function() { ifprev(); is_user_slide_nav = true; },
		navStartStop: false,
		navButtons: false	
	});
	
	
	/**/
	/* page header top */
	/**/
	$('#page-header-top-switcher').on('click', function()
	{		
		$(this).parent().parent().toggleClass('visible');		
		return false;
	});
	
	
	/**/
	/* mobile-nav */
	/**/
	$('#mobile-nav').on('click', '.switcher', function()
	{
		elem = $(this);
		elem.toggleClass('opened');
		
		if( elem.hasClass('opened') )
		{
			$(elem.attr('href')).addClass('opened');
		}
		else
		{
			$('#mobile-nav ul').removeClass('opened').removeClass('closed');
		}
		return false;
	});
	$('#mobile-nav').on('click', '.opener', function()
	{
		elem = $(this);
		elem.closest('ul').addClass('closed');
		$(elem.attr('href')).addClass('opened');
		return false;
	});
	$('#mobile-nav').on('click', '.back', function()
	{
		elem = $(this);
		elem.closest('ul').removeClass('opened');
		$(elem.attr('href')).removeClass('closed');
		return false;
	});
	
	
	/**/
	/* portfolio */
	/**/
	$('#portfolio .filter').on('click', 'a', function()
	{		
		$('#portfolio .grid').isotope(
	 	{
	 		filter: $(this).data('filter')
		});
		$(this).addClass('active').siblings().removeClass('active');		
		
		return false;
	});
	$('#portfolio .grid').isotope({
		itemSelector : '.item',
		masonry: {columnWidth: $('#portfolio .item').outerWidth()}
	});
	
	
	/**/
	/* portfolio carousel */
	/**/
	$('#portfolio-carousel').owlCarousel({
		singleItem: true,
		navigation: false,
		pagination: false,
		slideSpeed: 300,
		paginationSpeed: 300,
		rewindSpeed: 300,
		autoHeight: true
  });
  $("#portfolio-carousel-prev").click(function()
  {
  	$('#portfolio-carousel').trigger('owl.prev');
  	return false;
  });
  $("#portfolio-carousel-next").click(function()
  {
  	$('#portfolio-carousel').trigger('owl.next');
  	return false;
  });
  
  
	/**/
	/* blog */
	/**/
	$('#blog .grid').isotope({
		itemSelector : '.item',
		masonry: {columnWidth: $('#blog .item').outerWidth()}
	});
	
	
	/**/
	/* team */
	/**/
	$('#team .filter').on('click', 'a', function()
	{		
		$('#team ul').isotope(
	 	{
	 		filter: $(this).data('filter')
		});
		$(this).addClass('active').siblings().removeClass('active');		
		
		return false;
	});
	$('#team ul').isotope({
		itemSelector : '.item',
		masonry: {columnWidth: $('#team .item').eq(0).outerWidth()}
	});
	
	
	/**/
	/* projects */
	/**/
	$('#projects .filter').on('click', 'a', function()
	{		
		$('#projects ul').isotope(
	 	{
	 		filter: $(this).data('filter')
		});
		$(this).addClass('active').siblings().removeClass('active');		
		
		return false;
	});
	$('#projects').imagesLoaded(function()
	{
		$('#projects ul').isotope({
			itemSelector : '.item',
			filter: $('#projects .filter .active').data('filter'),
			masonry: {columnWidth: $('#projects .item').eq(0).outerWidth()}
		});
	});
	
	
	/**/
	/* slider */
	/**/
	$('#slider').slider(
	{
		range: true,
		min: 0,
		max: 5000,
		values: [0, 5000],
		slide: function( event, ui )
		{
			$('#slider-label .from').text(ui.values[0]);
			$('#slider-label .to').text(ui.values[1]);
		}
	});
	
	
	/**/
	/* contact form */
	/**/
	
	/* validate the contact form fields */			
	$("#feedback-form").validate(
	{
		onkeyup: false,
		onfocusout: false,
		rules:
		{
			name:
			{
				required: true
			},
			email:
			{
				required: true,
				email: true
			},
			message:
			{
				required: true
			}
		},
		messages:
		{
			name:
			{
				required: 'Please enter your name',
			},
			email:
			{
				required: 'Please enter your email address',
				email: 'Please enter a VALID email address'
			},
			message:
			{
				required: 'Please enter your message'
			}
		},
		submitHandler: function(form)
		{			
			$form = $(form).ajaxSubmit();
			submit_handler($form, '#email_server_responce');
		}
	});

	/**/
	/* contact widget */
	/**/
	
	/* clear validation results on reset */	
	$("#widget-form").find("button[type='reset']").on("click", function (){
		validator.resetForm();
	});
	
	/* validate the widget form fields */		
	var validator = $("#widget-form").validate(
	{
		onkeyup: false,
		onfocusout: false,
		rules:
		{
			name:
			{
				required: true
			},
			email:
			{
				required: true,
				email: true
			},
			message:
			{
				required: true
			}
		},
		messages:
		{
			name:false,
			email:false,
			message:false
		},
		submitHandler: function(form)
		{			
			var $form = $(form);
			submit_handler($form, '#widget_server_responce');
		}
	});


	
	
	
	/* validate newsletter signup field */		
	$("#newsletter-form").validate(
	{
		onkeyup: false,
		onfocusout: false,
		rules:
		{
			email:
			{
				required: true,
				email: true
			}
		},
		messages:
		{
			email:
			{
				required: 'Please type in your email!',
				email: 'Please check your email!'
			}
		},
		submitHandler: function(form)
		{			
			var $form = $(form);
			submit_handler($form, '#signup_server_responce');
		}
	});
	
	/* Ajax, Server response */	
	function submit_handler (form, wrapper){
		var $wrapper = $(wrapper); //this class should be set in HTML code
		$wrapper.css("display","block");
		var data = {
			action: "email_server_responce",
			values: $(form).serialize()
		};
		//send data to server
		$.post("php/contacts-process.php", data, function(s_response) {
			s_response = $.parseJSON(s_response);
			if(s_response.info == 'success'){
				$wrapper.addClass("message message-success").append("<i class='fa fa-check'></i><h4>Your message has been successfully sent!</h4>");
				$wrapper.delay(5000).hide(500, function(){
					$(this).removeClass().text("").fadeIn(500);
					$wrapper.css("display","none");
				});
				$(form)[0].reset();	
			} else { 
				$wrapper.addClass("message message-error").append("<i class='fa fa-exclamation'></i><h4>Server fail! Please try again later!</h4>");
				$wrapper.delay(5000).hide(500, function(){
					$(this).removeClass().text("").fadeIn(500);
					$wrapper.css("display","none");
				});
			}
		});
	return false;
	}
	
	/**/
	/* countdown */
	/**/
	var date = new Date();
	date = new Date(date.getFullYear(), date.getMonth(), date.getDate() + 10);
	$('#countdown').countdown({
		until: date,
		format: 'DHMS',
		layout: '<ul><li><span>{dnn}</span>{dl}</li><li><span>{hnn}</span>{hl}</li><li><span>{mnn}</span>{ml}</li><li><span>{snn}</span>{sl}</li></ul>'
	});
	
	
	/**/
	/* accordion */
	/**/
	$('.accordion .active').next().show();
	$('.accordion').on('click', 'dt', function()
	{
		$(this).toggleClass('active').siblings('dt').removeClass('active');
		$(this).siblings('dd').slideUp('fast');
		$(this).next().stop().slideDown('fast');
	});	
	
	
	/**/
	/* testimonial */
	/**/
	$('.testimonial-group').on('click', '.author', function()
	{
		$(this).addClass('active').siblings().removeClass('active');
		$(this).parent().prev().find('.text').eq($(this).index()).addClass('active').siblings().removeClass('active');
	});
	$('#testimonials-carousel').owlCarousel({
		singleItem: true,
		navigation: false,
		pagination: true,
		slideSpeed: 300,
		paginationSpeed: 300,
		rewindSpeed: 300,
		autoHeight: true,
		afterUpdate :parallaxCarousel ,

  	});
  	//function to load parallax after carousel bild
  	function parallaxCarousel () {
  		setTimeout(function() { $('#testimonials-carousel').parent().parent().parallax(); }, 300)		
  	}
	
	
	
	/**/
	/* toggle */
	/**/
	$('.toggle .active').next().show();
	$('.toggle').on('click', 'dt', function()
	{
		$(this).toggleClass('active');
		$(this).next().stop().slideToggle('fast');
	});
	
	
	/**/
	/* twitter carousel */
	/**/
	if ($('#twitter-carousel').length) {
		$('#twitter-carousel').tweet({
			username: 'Creative_WS',
			count: 5,
			loading_text: 'loading twitter feed...',
			template: "<div class='item'><p><a href='{user_url}'>@{screen_name}</a>{join}{text}<br>{time}</p></div>"
		});
		$('#twitter-carousel .tweet_list').addClass("owl-carousel");
		twitter_carousel_init();
	};
	if ($('#twitter-carousel-alt').length) {
		$('#twitter-carousel-alt').tweet({
			username: 'Creative_WS',
			count: 5,
			loading_text: 'loading twitter feed...',
			template: "<div class='item'><p><a href='{user_url}'>@{screen_name}</a>{join}{text}<br>{time}</p></div>"
		});
		$('#twitter-carousel-alt .tweet_list').addClass("owl-carousel");
		twitter_carousel_init();
	};
	
	function twitter_carousel_init (){	
		$('#twitter-carousel .tweet_list').owlCarousel({
			singleItem: true,
			navigation: true,
			navigationText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
			pagination: false,
			slideSpeed: 300,
			paginationSpeed: 300,
			rewindSpeed: 300,
			autoHeight: true
	  });
		$('#twitter-carousel-alt .tweet_list').owlCarousel({
			singleItem: true,
			navigation: false,
			navigationText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
			pagination: true,
			slideSpeed: 300,
			paginationSpeed: 300,
			rewindSpeed: 300,
			autoHeight: true
	  });
	};

	/* twitter feed */
	if ($('.twitter-feed').length) {
		$('.twitter-feed').tweet({
			username: 'Creative_WS',
			count: 5,
			loading_text: 'loading twitter feed...',
			template: "<li><i class='fa fa-twitter'></i><p><a href='{user_url}'>@{screen_name}</a>{join}{text}<br>{time}</p></li>"
		});
	};
	
	/**/
	/* widget sellers */
	/**/
	$('#sellers-carousel, #sales-carousel').owlCarousel({
		singleItem: true,
		navigation: true,
		navigationText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
		pagination: true,
		slideSpeed: 300,
		paginationSpeed: 300,
		rewindSpeed: 300,
		autoHeight: true
  });
	
	
	/**/
	/* map */
	/**/
	if( document.getElementById('map') )
	{
		var script = document.createElement('script');
	 	script.type = 'text/javascript';
	 	script.src = 'https://maps.googleapis.com/maps/api/js?sensor=false&callback=init_map';
	 	document.body.appendChild(script);
 	}
	
	
	/**/
	/* scroll top */
	/**/
	$('#scroll-top').click(function()
	{
		$('html, body').animate({scrollTop: 0});
		return false;
	});
});
/**/
/* on window load */
/**/
jQuery(window).load(function()
{
	/**/
	/* bgvideo */
	/**/
	$('#bgvideo video').css('margin', '-' + $('#bgvideo video').height()/2 + 'px 0 0 -' + $('#bgvideo video').width()/2 + 'px');
	setTimeout(function()
	{
		$('#bgvideo video').css('margin', '-' + $('#bgvideo video').height()/2 + 'px 0 0 -' + $('#bgvideo video').width()/2 + 'px');
	}, 1000);
	
	/* parallax */
	$('.parallaxed').parallax();

	
	
	/**/
	/* blog */
	/**/
	$('.blog .grid').isotope({
		masonry: {columnWidth: $('.blog .item').eq(0).outerWidth()}
	});
});
