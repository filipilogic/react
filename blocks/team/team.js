jQuery(document).ready(function ($) {

    // Team

    $(".il_team_member").click(function () {
        $(this).next(".member_text").slideToggle().toggleClass('t-open');
        $(".il_team_member").not(this).next(".member_text.t-open").slideToggle().removeClass('t-open');
        let member_data = $(this).data('member');
        let element_id = '#' + member_data;
        let element = $(element_id);

        var windowsize = $(window).width();
        if (windowsize < 768) {
            setTimeout(() => {
                $([document.documentElement, document.body]).animate({
                    scrollTop: element.offset().top
                }, 100);
            }, 400);
        } else {
            setTimeout(() => {
                $([document.documentElement, document.body]).animate({
                    scrollTop: element.offset().top - 100
                }, 100);
            }, 400);
        }


        // $([document.documentElement, document.body]).animate({
        //     scrollTop: element.offset().top
        // }, 100);
    });
    $(".member_text .close").click(function () {
        $(this).parents('.member_text').slideToggle().removeClass('t-open');
        let member_data = $(this).parents('.member_text').attr('id');
        let member_id = '#' + member_data + '_id';
        let member_view = $(member_id);
        console.log(member_view)
        $([document.documentElement, document.body]).animate({
            scrollTop: member_view.offset().top
        }, 100);
    });

});