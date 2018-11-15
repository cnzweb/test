jQuery(document).ready(function($){
        //LightBox and Responsive Tabs//
        $('.venobox').venobox();
        RESPONSIVEUI.responsiveTabs();
       //Macth Height//
       jQuery('.block-item-bg').matchHeight({byRow: true});
       jQuery('.contact-image-row .col-md-6').matchHeight({byRow: true});
       //Open External and PDF Links in New Windows//
       $("a[target!='_blank'][href$='.pdf']").attr("target", "_blank");
        var website = window.location.hostname;
        var internalLinkRegex = new RegExp('^((((http:\\/\\/|https:\\/\\/)(www\\.)?)?' + website  + ')|(localhost:\\d{4})|(\\/.*))(\\/.*)?$', '');
        $('a').filter(function() {
          var href = $(this).attr('href');
          return !internalLinkRegex.test(href);
        })
        .each(function() {
            $(this).attr('target', '_blank');
        });
}); 
//Mobile Nav//
;(function($){
	// DOM ready
	$(function(){
		// Append the mobile icon nav
        $('.header-bottom').prepend($('<a id="nav-toggle" href="#"><span></span></a> '));
		// Add a <span> to every .nav-item that has a <ul> inside
		$('#menu-main-menu li').has('ul').prepend('<span class="nav-click"><i class="nav-arrow"></i></span>');
        // Click to reveal the nav
	  	$('#nav-toggle').click(function(){
	   	  this.classList.toggle( "active" );
          $('#menu-main-menu').slideToggle('slow');
		});
		// Dynamic binding to on 'click'
		$('#menu-main-menu').on('click', '.nav-click', function(){
            // Toggle the nested nav
			$(this).siblings('.sub-menu').slideToggle();
			// Toggle the arrow using CSS3 transforms
			$(this).children('.nav-arrow').toggleClass('nav-rotate');
		});
});
})(jQuery);