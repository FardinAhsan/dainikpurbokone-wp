;
(function ($) {
    $(document).ready(function () {
        $('#af_btn').on('click', function (e) {
            $.post(
                url.ajax_url, {
                    action: 'date_archive',
                    day: $('#archive-day').val(),
                    month: $("#archive-month").val(),
                    year: $("#archive-year").val(),
                    af: $("#af").val(),
                },
                function (response) {
                    window.location.replace(response.data.url);
                }
            );
            return false;
        });
    });
})(jQuery);