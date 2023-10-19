<!-- Footer Section Start -->
<footer>
    <img src="images/wave2.png" alt="wave" class="w-100">
    <div class="container pt-5">
        <div class="footer-top">
            <div class="row">
                <div class="col-md-4 footer-contact">
                    <p class="text-uppercase fw-bold">contact us</p>
                    <p>
                        <i class="fas fa-location-pin"></i>
                        World Trade Center, Bengalore
                    </p>
                    
                    <p>
                        <i class="fas fa-phone"></i>
                        +0023435345
                    </p>

                    <p>
                        <i class="fas fa-envelope"></i>
                        xyz@gmail.com
                    </p>
                </div>

                <div class="col-md-4">
                    <div class="footer-logo">
                        <img class="rounded" src="images/logos/cumilla.jpg" alt="Footer Logo">
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur totam doloribus nam nostrum maxime. Maiores ad optio possimus dolorum! Sint!</p>
                </div>

                <div class="col-md-4">
                    <div class="footer-sitemap">
                        <h5>OUR SITEMAP</h5>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about.php">About</a></li>
                            <li><a href="admisssion.php">Admission Information</a></li>
                            <li><a href="news.php">News &amp; Events</a></li>
                            <li><a href="#">Why Study At NDC</a></li>
                            <li><a href="#">Governing Body</a></li>
                            <li><a href="#">Alumni</a></li>
                            <li><a href="#">Faculty &amp; Staff</a></li>
                            <li><a href="#">Club</a></li>
                            <li><a href="#">Results</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <hr>
            <p class="p-3">©Cumilla Shikkha Board Govt. Model College 2020, Designed & Developed by iHealthScreen Bangladesh <a href="https://ihealthscreen.org/">iHealthScreen Bangladesh</a>.</p>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Bootstrap JS CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
<script>
    const nav = document.querySelector('.navbar');
    window.addEventListener('scroll', function(){
        const offset = window.pageYOffset;

        if(offset > 200){
            nav.classList.add('fixed-top');
        } else{
            nav.classList.remove('fixed-top');
        }
    });
</script>
</body>
</php>