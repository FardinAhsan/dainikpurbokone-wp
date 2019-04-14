;
(function ($) {
    $(document).ready(function () {
        $("#most_popular_tab").addClass('active');
        $("#most_popular").addClass('active-design');
        $("#most_popular").css('color', '#000');
        $("#recent").css('color', '#7E7E7E');

        $("#most_popular").click(function (e) {
            // e.preventdefault();
            $("#most_popular_tab").slideDown('slow');
            $("#recent_tab").hide('slow');

            $("#most_popular").addClass('active-design');
            $("#recent").removeClass('active-design');

            $(this).css('color', '#000');
            $("#recent").css('color', '#7E7E7E');
            return false;
        });
        $("#recent").click(function (e) {
            // e.preventdefault();
            $("#recent_tab").slideDown('slow');
            $("#most_popular_tab").hide('slow').removeClass('active');

            $("#recent").addClass('active-design');
            $("#most_popular").removeClass('active-design');

            $(this).css('color', '#000');
            $("#most_popular").css('color', '#7E7E7E');
            return false;
        });
        // most view tab end
    })
})(jQuery)