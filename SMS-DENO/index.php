<!-- Header Section Start -->
<?php require('includes/header.php') ?>
<!-- Header Section End -->

<div id="body_content">
    <div id="main_content">
        <?php require('home.php') ?>
    </div>
    <div id="link_content">
    </div>
</div>

<!-- Footer Section Start -->
<script>
    $('#body_content').ready(function () {
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
        $('#link_page').click(function (e) {
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
</script>

<?php require('includes/footer.php') ?>
<!-- Footer Section End -->