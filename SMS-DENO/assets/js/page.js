$(document).ready(function () {
        // Listen for click events on the navigation links
        $('#page_link').click(function (e) {
            e.preventDefault(); // Prevent the default behavior of the link

            // Get the URL from the data-page attribute
            var pageURL = $(this).data('page');

            // Use AJAX to load the content from the specified URL
            $.ajax({
                url: pageURL,
                type: 'GET',
                dataType: 'html',
                success: function (data) {
                    // Replace the content of "link_content" with the loaded data
                    $('#link_content').html(data);
                },
                error: function () {
                    // Handle any errors that may occur during the request
                    $('#link_content').html('Error loading the page.');
                }
            });
        });
    });

// $(document).ready(function () {
//     // Function to load content into #link_content
//     function loadPage(pageURL) {
//         $.ajax({
//             url: pageURL,
//             type: 'GET',
//             dataType: 'html',
//             success: function (data) {
//                 $('#link_content').html(data);
//             },
//             error: function () {
//                 $('#link_content').html('Error loading the page.');
//             }
//         });
//     }

//     // Listen for click events on the navigation links
//     $('.nav-link').click(function (e) {
//         e.preventDefault();
//         var pageURL = $(this).data('page');
//         loadPage(pageURL);
//     });

//     // Load the default content on page load
//     loadPage('home.php');
// });
$(document).ready(function () {
    // Function to load content into #link_content
    function loadPage(pageURL) {
        $.ajax({
            url: pageURL,
            type: 'GET',
            dataType: 'html',
            success: function (data) {
                $('#link_content').html(data);
            },
            error: function () {
                $('#link_content').html('Error loading the page.');
            }
        });
    }

    // Listen for click events on the navigation links
    $('.nav-link').click(function (e) {
        e.preventDefault();
        var pageURL = $(this).data('page');

        if (pageURL === "#") {
            // Hide #link_content and show #main_content
            $('#link_content').hide();
            $('#main_content').show();
        } else {
            // Hide #main_content
            $('#main_content').hide();

            // Show #link_content and load the page
            $('#link_content').show();
            loadPage(pageURL);
        }
    });

    // Load the default content (home.php) on page load
    loadPage('home.php');
});

