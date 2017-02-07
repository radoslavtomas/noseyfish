(function($){

	/*Scrollreveal*/

	window.sr = ScrollReveal();
	sr.reveal('.profilePic', {
		origin:'left',
		duration: 1000,
		distance: '100px',
		delay: 200
	});

	sr.reveal('.skill', { 
		origin:'left',
		duration: 500,
		distance: '100px',
		delay: 100
	});

	/*Sticky Navigation*/

	var mainNav = $('.main-nav'),
		navLinks = $('.nav-links'),
		intro = $('.intro'),
		win = $(window);

	function stickyNav() {
	
		var pos = win.scrollTop(),
			heightAbove = intro.height() - mainNav.height();

			/*handling the initial navigation position*/
			mainNav.css('top', heightAbove+'px');

			/*main code for sticky navigation*/
			win.on('scroll', function() {
				if (win.scrollTop() > heightAbove) {
					mainNav.addClass('fixed');
				} 
				else { 
					mainNav.removeClass('fixed');
				}
			});
		}

	stickyNav();


	/*Mobile Navigation Dropdown*/

	$(".btn-menu").on('click', function(){

		var isAbsolute = mainNav.is(function(){
			return mainNav.css('position') == 'absolute';
		}),
			heightAbove = intro.height() - mainNav.height();
		
		if( isAbsolute ){
			navLinks.slideToggle();
			$('html, body').animate({scrollTop: heightAbove}, 600);
		} 
		else{
			navLinks.slideToggle();
		}
	});

	$(".main-nav ul > li a").on('click', function(){
		if($(window).width() <= 720) {
			navLinks.css('display','none');
		}
	});


	/*Resizing resoluion events*/

	$(window).resize(function(){
		/*handling stickyNav function*/
		stickyNav();

		var winWidth = $(window).innerWidth();
    	if(winWidth > 703) navLinks.show();
       	else navLinks.hide();
	});

	/*Cover image slider*/
	
	var covers = $('.covers');

	covers.children(':not(:last)').hide();

	setInterval(function(){
		covers.children(':last').fadeOut(1500, function(){
			$(this).prependTo( covers );
		}).prev().fadeIn(1500);
	}, 6000);


	/*Education badges*/

	$('.school').on('click', function(){
		var course = $(this).find('.courses');
		course.slideToggle(600);
	});


	/*Smooth site scrolling*/

	var menuLinks = navLinks.find('a');

	menuLinks.on('click', function(event){
		event.preventDefault();
		$('html,body').animate({ scrollTop: $(this.hash).offset().top }, 800);
	});


	/*Changing active main menu item*/
	
	var navLinksHeight = navLinks.height(),
	    // Anchors corresponding to menu items
	    scrollItems = menuLinks.map(function(){
	      var item = $($(this).attr('href'));
	      if (item.length) { return item; }
	    });

	// Bind to scroll
	$(window).scroll(function(){
	   var fromTop = $(this).scrollTop()+navLinksHeight;
	   var cur = scrollItems.map(function(){
	     if ($(this).offset().top < fromTop)
	       return this;
	   });
	   // Get the id of the current element
	   cur = cur[cur.length-1];
	   var id = cur && cur.length ? cur[0].id : "";
	   // Set/remove active class
	   menuLinks
	     .parent().removeClass('active')
	     .end().filter("[href='#"+id+"']").parent().addClass('active');
	});


	/*Portfolio Ajax slider*/

	var slideHolder = $('.slideHolder');

			/*sub-menu buttons slider*/

	$('.sub-menu li').on('click', function(event) {	
		event.preventDefault();	

		var selected = $('.sub-menu').find('.selected'),
			li  = $(this),
			href  = li.find('a').attr('href'),
			lis 	  = $('.sub-menu li');

		if ( selected == li ) return;

		selected = li;

		li.addClass('selected');
		lis.not(li).removeClass('selected');
		slideHolder.find('.toSlide').fadeOut();

		$.ajax({
			url: href,
			type: 'GET',
			dataType: 'html',
			success: function(data) {
				var newPortfolio = $(data).find('.toSlide');
				slideHolder.html( newPortfolio ).hide().fadeIn();
			}
		});
	});

			/*left arrow slider*/

	slideHolder.on('click', '.angle-left', function(event){
		event.preventDefault();

		var selected = $('.sub-menu').find('.selected'),
			li 		= selected.prev(),
			href 	= li.find('a').attr('href'),
			lis 	= $('.sub-menu li');

		if (li.length == 0) {
			var li = selected.siblings().last();
		}

		if (href == undefined) {
			var href = selected.siblings().last().find('a').attr('href');
		}
		
		li.addClass('selected');
		lis.not(li).removeClass('selected');
		slideHolder.find('.toSlide').fadeOut();

		$.ajax({
			url: href,
			type: 'GET',
			dataType: 'html',
			success: function(data) {
				var newPortfolio = $(data).find('.toSlide');
				slideHolder.html( newPortfolio ).hide().fadeIn();
			}
		});
	});

			/*right arrow slider*/

	slideHolder.on('click', '.angle-right', function(event){
		event.preventDefault();

		var selected = $('.sub-menu').find('.selected'),
			li 		= selected.next(),
			href 	= li.find('a').attr('href'),
			lis 	= $('.sub-menu li');

		if (li.length == 0) {
			var li = selected.siblings().first();
		}

		if (href == undefined) {
			var href = selected.siblings().first().find('a').attr('href');
		}
		
		li.addClass('selected');
		lis.not(li).removeClass('selected');
		slideHolder.find('.toSlide').fadeOut();

		$.ajax({
			url: href,
			type: 'GET',
			dataType: 'html',
			success: function(data) {
				var newPortfolio = $(data).find('.toSlide');
				slideHolder.html( newPortfolio ).hide().fadeIn();
			}
		});
	});


	/*Overlay efect on portfolio images*/

	slideHolder
		.on('mouseenter', '.portfolioImage', function(){
	    	$(this).find('.overlay').addClass('active');
		})
		.on('mouseleave', '.portfolioImage', function(){
	    	$(this).find('.overlay').removeClass('active');
		});


	/*Lightbox for portfolio images*/

	var screenOverlay = $('<div/>', {id: 'screenOverlay'});
		screenOverlay.appendTo('body').hide();

	slideHolder.on('click', '.spock', function(event) {
		var imageHref = $(this).attr('href'),
			image     = $('<img/>', { src: imageHref, alt: 'portfolioImage' });

		screenOverlay.html( image ).show();
		event.preventDefault();
	});

	screenOverlay.on('click', function(){
		screenOverlay.hide();
	});
	// screeOverlay will disapear also after clicking to esc
	$(document).on('keyup', function(event) {
		if (event.which === 27 ) screenOverlay.hide();
	});


	/*Contact form*/

	// Credits to Codeplayer: http://thecodeplayer.com/walkthrough/animating-float-labels-jquery-css3

	$(".contactForm label").each(function(){
		var sop = '<span class="ch">';
		var scl = '</span>'; 
		$(this).html(sop + $(this).html().split("").join(scl+sop) + scl);
		$(".ch:contains(' ')").html("&nbsp;");
	});

	var d;
	$(".contactForm input").focus(function(){
		var tm = $(this).outerHeight()/2 *-1 + "px";
		$(this).next().addClass("focussed").children().stop(true).each(function(i){
			d = i*50;
			$(this).delay(d).animate({top: tm}, 200, 'easeOutBack');
		});
	});

	$(".contactForm input").blur(function(){
		if($(this).val() == "")
		{
			$(this).next().removeClass("focussed").children().stop(true).each(function(i){
				d = i*50;
				$(this).delay(d).animate({top: 0}, 500, 'easeInOutBack');
			});
		}
	});

	$(".contactForm textarea").focus(function(){
		var tm = "-1.41209375em";
		$(this).next().addClass("focussed").children().stop(true).each(function(i){
			d = i*50;
			$(this).delay(d).animate({top: tm}, 200, 'easeOutBack');
		});
	});

	$(".contactForm textarea").blur(function(){
		if($(this).val() == "")
		{
			$(this).next().removeClass("focussed").children().stop(true).each(function(i){
				d = i*50;
				$(this).delay(d).animate({top: 0}, 500, 'easeInOutBack');
			});
		}
	});


})(jQuery);