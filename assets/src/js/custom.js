jQuery(document).ready(function ($) {

    // Mobile navigation

    $(".menu-toggle").click(function () {
        $("#primary-menu").fadeToggle();
        $(this).toggleClass('menu-open');
        $( '#masthead' ).toggleClass('sticky');
    });
    // Sub Menu Trigger

    $( "#primary-menu li.menu-item-has-children > a" ).after('<span class="sub-menu-trigger"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></span>');

    $( ".sub-menu-trigger" ).click(function() {
		$( this ).parent().toggleClass('sub-menu-open');
		$( this ).siblings(".sub-menu").slideToggle();
	});


    $( "#primary-menu li" ).click(function() {
        var windowsize = $(window).width();
        if (windowsize < 1200) {
            $("#primary-menu").fadeToggle();
            $(".menu-toggle").toggleClass('menu-open')
        }
    })


    // var urlParams = new URLSearchParams(window.location.search);
    // var paramName = urlParams.get('utm_source');

    // if(paramName === 'linkedin'){
    //     $('.hero-din-btn .il_btn:first-of-type').attr('href','https://www.eventbrite.com/e/recent-advances-in-cancer-treatment-react-2023-tickets-647054135337?aff=linkedintraffic');
    //     $('.about-din-btn .il_btn').attr('href','https://www.eventbrite.com/e/recent-advances-in-cancer-treatment-react-2023-tickets-647054135337?aff=linkedintraffic');
    //     $('.agenda-din-btn a').attr('href','https://www.eventbrite.com/e/recent-advances-in-cancer-treatment-react-2023-tickets-647054135337?aff=linkedintraffic');
    //     $('.spot-din-btn .il_btn').attr('href','https://www.eventbrite.com/e/recent-advances-in-cancer-treatment-react-2023-tickets-647054135337?aff=linkedintraffic');
    // }

    // if(paramName === 'facebook'){
    //     $('.hero-din-btn .il_btn:first-of-type').attr('href','https://www.eventbrite.com/e/recent-advances-in-cancer-treatment-react-2023-tickets-647054135337?aff=facebooktraffic');
    //     $('.about-din-btn .il_btn').attr('href','https://www.eventbrite.com/e/recent-advances-in-cancer-treatment-react-2023-tickets-647054135337?aff=facebooktraffic');
    //     $('.agenda-din-btn a').attr('href','https://www.eventbrite.com/e/recent-advances-in-cancer-treatment-react-2023-tickets-647054135337?aff=facebooktraffic');
    //     $('.spot-din-btn .il_btn').attr('href','https://www.eventbrite.com/e/recent-advances-in-cancer-treatment-react-2023-tickets-647054135337?aff=facebooktraffic');
    // }
  
    // Technologies
/*
    $(".tg_trigger-1").click(function () {
        $(".tg_trigger-1").toggleClass('si_open');
        $(".tg_trigger.si_open:not(.tg_trigger-1)").removeClass('si_open');
        $(".tg_modal-1").slideToggle().toggleClass('si_open');
        $(".tg_modal.si_open:not(.tg_modal-1)").slideToggle().removeClass('si_open');
    });

    $(".tg_trigger-2").click(function () {
        $(".tg_trigger-2").toggleClass('si_open');
        $(".tg_trigger.si_open:not(.tg_trigger-2)").removeClass('si_open');
        $(".tg_modal-2").slideToggle().toggleClass('si_open');
        $(".tg_modal.si_open:not(.tg_modal-2)").slideToggle().removeClass('si_open');
    });

    $(".tg_trigger-3").click(function () {
        $(".tg_trigger-3").toggleClass('si_open');
        $(".tg_trigger.si_open:not(.tg_trigger-3)").removeClass('si_open');
        $(".tg_modal-3").slideToggle().toggleClass('si_open');
        $(".tg_modal.si_open:not(.tg_modal-3)").slideToggle().removeClass('si_open');
    }); */

    document.addEventListener( 'wpcf7mailsent', function( event ) {
        location = '/thank-you';
    }, false );
       
});

window.onscroll = function() {
    scrollHeader()
};

function scrollHeader() {
  if ( document.body.scrollTop > 100 || document.documentElement.scrollTop > 100 ) {
    document.getElementById("masthead").className = "header-main sticky";
  } else {
    document.getElementById("masthead").className = "header-main";
  }
}
