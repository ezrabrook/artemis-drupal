$(document).ready(function() {
	$("#edit-search-theme-form-1").val("SEARCH");
	
	/**
	* Written by Rob Schmitt, The Web Developer's Blog
	* http://webdeveloper.beforeseven.com/
	*/

	/**
	* The following variables may be adjusted
	*/
	var active_color = '#959595'; // Colour of user provided text
	var inactive_color = '#959595'; // Colour of default text

	/**
	* No need to modify anything below this line
	*/
	$(".form-text").css("color", inactive_color);
	var default_values = new Array();
	$(".form-text").focus(function() {
		if (!default_values[this.id]) {
		default_values[this.id] = this.value;
	}
	if (this.value == default_values[this.id]) {
		this.value = '';
		this.style.color = active_color;
	}
	$(this).blur(function() {
		if (this.value == '') {
			this.style.color = inactive_color;
			this.value = default_values[this.id];
		}
		});
	});
	
	
	/* Adding bootstrap classes to default Drupal elements */
	$(".view-home-rotator .rotator_image img").addClass("img-responsive");
	$(".view-feature-image-rotator .views_slideshow_singleframe_teaser_section img").addClass("img-responsive");
	
	var newHeight = $('.view-home-rotator .rotator_image img').height();
    $(".views_slideshow_singleframe_teaser_section, .views_slideshow_singleframe_slide").show().height(newHeight);
	
	$(window).resize(function () {
        newHeight = $('.view-home-rotator .rotator_image img').height();
        $(".views_slideshow_singleframe_teaser_section, .views_slideshow_singleframe_slide").show().height(newHeight);
    });
	
	$(".search-toggle").click(function() {
		console.log("howdy");
		$(".mobile_search").slideToggle(50);
	});
	
	$(".navbar-toggle").click(function() {
		$(".menu_collapse").slideToggle('slow');
	});
	
	
	$(".mobile_sidenav_icon .sidenav_right").hide();
	$(".side_nav li").click(function() {
		$(".side_nav").css("right", "0");
		
		var sidenavCSS = $(".side_nav").css("right");
		if (sidenavCSS = "0px")
		{
			$(".side_nav li").css("padding-left", "0");
		}
		
		$(".mobile_sidenav_icon .sidenav_right").show();
		$(".mobile_sidenav_icon .sidenav_left").hide();
	});
	$(".mobile_sidenav_icon .sidenav_left").click(function() {
		$(".side_nav").css("right", "0");
		
		var sidenavCSS = $(".side_nav").css("right");
		if (sidenavCSS = "0px")
		{
			$(".side_nav li").css("padding-left", "0");
		}
		
		$(".mobile_sidenav_icon .sidenav_right").show();
		$(".mobile_sidenav_icon .sidenav_left").hide();
	});
	
	$(".mobile_sidenav_icon .sidenav_right").click(function() {
		$(".side_nav").css("right", "-228px");
		
		var sidenavCSS = $(".side_nav").css("right");
		if (sidenavCSS = "-228px")
		{
			$(".side_nav li").css("padding-left", "20px");
		}
		
		$(".mobile_sidenav_icon .sidenav_right").hide();
		$(".mobile_sidenav_icon .sidenav_left").show();
	});
	/* Assign Random classes to Faculty Images to get random colors on image bottom borders*/
		function randOrd() {
		return (Math.round(Math.random())-0.5); 
	}

	$(document).ready(function() {
		var klasses = [ 'faculty_blue', 'faculty_red', 'faculty_green', 'faculty_yellow', 'faculty_purple', 'faculty_teal', 'faculty_orange' ];
		//klasses.sort( randOrd );
		$('#main .faculty_image_landing').each(function(i){
			$(this).addClass(
				klasses[Math.floor(Math.random()*klasses.length)]);
		});
		
		$('#main .faculty_interests').each(function(i) {
			$(this).addClass(
				klasses[Math.floor(Math.random()*klasses.length)]);
		});
		$('#main .imagecache-area-of-focus_page').each(function(i) {
			$(this).addClass(
				klasses[Math.floor(Math.random()*klasses.length)]);
		});
	});
	
	/* Add PDF/Doc icons to Documents. */
	String.prototype.endsWith = function (suffix) {
		return this.indexOf(suffix, this.length - suffix.length) !== -1;
	};
	$('.sub_content_area .sub_right a').each(function () {
		if ($(this).attr("href")) {
			var href = $(this).attr("href");
			if (href.endsWith("xlsx") || href.endsWith("xls")) {
				$(this).append('&nbsp;<img width="88" height="28" class="excel-icon" src="/sites/all/themes/hdfsresponsive/css/images/download_excel.png" />');
			}
			if (href.endsWith("pptx") || href.endsWith("ppt")) {
				$(this).append('&nbsp;<img width="88" height="28" class="ppt-icon" src="/sites/all/themes/hdfsresponsive/css/images/download_ppt.png" />');
			}
			if (href.endsWith("docx") || href.endsWith("doc")) {
				$(this).append('&nbsp;<img width="88" height="28" class="doc-icon" src="/sites/all/themes/hdfsresponsive/css/images/download_word.png" />');
			}
			if (href.endsWith("pdf")) {
				$(this).append('&nbsp;<img width="88" height="28" class="pdf-icon" src="/sites/all/themes/hdfsresponsive/css/images/download_pdf.png" />');
			}
			if (href.endsWith("txt")) {
				$(this).addClass('txt');
			}
		}
	});	
	$.expander.defaults.slicePoint = 120;

	$(document).ready(function() {
	  // simple example, using all default options unless overridden globally
	  $('div.expander').expander();

	  // *** OR ***

	  // override default options (also overrides global overrides)
	  $('div.bio_content_summary').expander({
		slicePoint:        550,  // default is 100
		preserveWords:     true,
		expandPrefix:      '... ', // default is '... '
		moreClass:         'read-expand',
		lessClass:         'read-collapse',
		expandText:        '[Expand]', // default is 'read more'
		expandEffect:      'show',
		expandSpeed:       250,
		collapseEffect:    'hide',
		collapseSpeed:     200,
		collapseTimer:     0, // re-collapses after 5 seconds; default is 0, so no re-collapsing
		userCollapse:      true,
		userCollapseText:  '[Collapse]',  // default is 'read less'
	  });

	});
});