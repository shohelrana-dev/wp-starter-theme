; (function ($) {
    $(document).ready(function () {
        var macy = Macy({
            container: '.post-container',
            trueOrder: false,
            waitForImages: false,
            columns: 4,
            breakAt: {
                1200: 4,
                940: 3,
                520: 2,
                400: 1
            }
        });
    });
})(jQuery)