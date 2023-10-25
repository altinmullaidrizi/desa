jQuery(document).ready(function () {

    var shareButton = jQuery('#share');

    // Add a click event handler to the "share" button
    shareButton.on('click', function () {
        // Check if the Web Share API is available in the browser
        if (navigator.share) {
            // Use the Web Share API to open the native share sheet
            navigator.share({
                title: 'Share this page', // Optional title
                text: 'Check out this awesome page!', // Optional text
                url: window.location.href, // The URL you want to share
            })
                .then(function () {
                    console.log('Successfully shared');
                })
                .catch(function (error) {
                    console.error('Share failed:', error);
                });
        } else {
            // Fallback behavior if the Web Share API is not supported
            console.info('Web Share API is not supported in this browser.');
            var copyText = document.getElementById("theUrl");
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            navigator.clipboard.writeText(copyText.value);

            var copiedSpan = jQuery('.copied');
            copiedSpan.css('opacity', '0.8');
            // Automatically hide it after two seconds
            setTimeout(function () {
                copiedSpan.css('opacity', '0');
            }, 1500);
        }
    });
    //Module Add On First Window
    var allModules = jQuery('.module');
    allModules.each(function (i, elm) {
        if (jQuery(elm).visible(true)) {
            jQuery(elm).addClass('module-ready');
        }
    });

    //Module Add Scroll
    var allModules = jQuery('.module');
    jQuery(document).on('scroll', function () {
        var scroll = jQuery(document).scrollTop();
        allModules.each(function (i, elm) {
            if (jQuery(elm).visible(true)) {
                jQuery(elm).addClass('module-ready');
            }
        })

        // console.log(scroll);
    });

});

//To add a background color on header on Scroll 
// $(window).on("scroll", function () {
//     if ($(window).scrollTop() > 80) {
//         $(".header").addClass("dark-background-on-scroll");
//     } else {
//         $(".header").removeClass("dark-background-on-scroll");
//     }
// });
