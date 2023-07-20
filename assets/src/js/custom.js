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

//Custom links for certain btn's depends utm params
    let websiteURL = document.location.host;
     if(websiteURL === 'react.shebaonline.org'){
         let urlParams = new URLSearchParams(window.location.search);
         let utmSource = urlParams.get('utm_source');
         
 
         if(utmSource === 'facebook'){
             let utmMedium = urlParams.get('utm_medium');
             let utmCampaign = urlParams.get('utm_campaign');
             let utmContent = urlParams.get('utm_content');
 
             let link_params = '?utm_source='+utmSource;
             utmMedium !== null ? link_params = link_params+'&utm_medium='+utmMedium : link_params
             utmCampaign !== null ? link_params = link_params+'&utm_campaign='+utmCampaign : link_params
             utmContent !== null ? link_params = link_params+'&utm_content='+utmContent : link_params
         
             let link = 'https://forms-wizard.biz/' + link_params + '';
 
             $('.hero-din-btn .il_btn:first-of-type').attr('href', link);
             $('.about-din-btn .il_btn').attr('href', link);
             $('.agenda-din-btn a').attr('href', link);
             $('.spot-din-btn .il_btn').attr('href', link);
         }
 
         if(utmSource === 'linkedin'){
             let utmMedium = urlParams.get('utm_medium');
             let utmCampaign = urlParams.get('utm_campaign');
 
             let link_params = '?utm_source='+utmSource;
             utmMedium !== null ? link_params = link_params+'&utm_medium='+utmMedium : link_params
             utmCampaign !== null ? link_params = link_params+'&utm_campaign='+utmCampaign : link_params
             
             let link = 'https://forms-wizard.biz/' + link_params + '';
 
             
             $('.hero-din-btn .il_btn:first-of-type').attr('href', link);
             $('.about-din-btn .il_btn').attr('href', link);
             $('.agenda-din-btn a').attr('href', link);
             $('.spot-din-btn .il_btn').attr('href', link);
         }
     }


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
        if(event.detail.contactFormId == '1185') {
            location = '/broadcast';
        } else {
            location = '/thank-you';
        }
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
