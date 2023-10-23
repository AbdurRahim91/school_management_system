<section class="">
        <div class="container mb-5">
            <div class="row">
                <div class="col-md-6">
                    <div class="about-image">
                    <div class="mySlides">
                    <img src="assets/images/img_nature_wide.jpg" style="width:100%">
                       <div class="bg-alert">Image-01</div>
                    </div>

                    <div class="mySlides">
                    <img src="assets/images/img_snow_wide.jpg" style="width:100%">
                    <div class="text">Image-02</div>
                    </div>

                    <div class="mySlides">
                    <img src="assets/images/img_mountains_wide.jpg" style="width:100%">
                    <div class="text">Image-03</div>
                    </div>

                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-text">
                        <h3 style="font-size: 22px;">Welcome to Your School &amp; College here</h3>
                        <p>Details About Your  School &amp; College</p>
                        <p><strong>লক্ষ্য</strong> <strong>ও</strong> <strong>উদ্দেশ্য</strong></p>
                        <ul>
                            <li>* সরকার গৃহীত নতুন শিক্ষানীতির আলোকে বিজ্ঞানমনস্ক,প্রযুক্তিনির্ভর শিক্ষাদানের মাধ্যমে দক্ষ প্রজন্ম গড়ে তোলা।</li>
                            <li>* সুশিক্ষার মাধ্যমে শিক্ষার্থীদের মেধার পরিপূর্ণ বিকাশ ঘটানো।</li>
                        </ul>
                        <a href="https://www.rebmsc.edu.bd/Pages/Page?pid=aboutpage" class="theme-white-btn">read more <i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
</section>

<script>
    let slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");

        if (n > slides.length) {
            slideIndex = 1;
        }

        if (n < 1) {
            slideIndex = slides.length;
        }

        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }

        slides[slideIndex - 1].style.display = "block";
    }

    // Automatic slideshow
    let autoSlideIndex = 0;

    function autoShowSlides() {
        plusSlides(1); // Simulate a click on the "next" button
        setTimeout(autoShowSlides, 5000); // Change image every 5 seconds
    }

    autoShowSlides(); // Start automatic slideshow
</script>