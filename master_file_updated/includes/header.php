<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>কুমিল্লা শিক্ষাবোর্ড সরকারি মডেল কলেজ</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="images/logo.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/notice.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
        var trigger = $('#nav ul li a'),
        container = $('#content');

        trigger.on('click', function(){
            
            var $this = $(this)
            target = $this.data('target');

        container.load(target + '.php');
        
        return false;
        });
    });
</script>
    
</head>

<body data-bs-theme="dark">
<!-- Header Section Start -->
    <section class="header-section">
        <header class="header-wrapper py-2">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="d-md-inline-flex d-sm-block justify-content-md-center align-items-sm-center">
                            <div class="logo-wrapper rounded-circle overflow-hidden">
                                <a href="index.php">
                                    <img class="rounded w-100 h-100" src="images/logo.png">
                                </a>
                            </div>
                            <div class="inst-title-wrapper d-flex overflow-hidden p-1 px-3">
                                <h1 class="ins-title mt-2" style="margin-top: -15px;">Cumilla Shikkha Board Govt. Model College</h1>
                                <address>Shaktala,Cumilla, Bangladesh</address>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" style="margin-top: 0.4rem;">
                        <div class="calender-wrapper-top d-md-inline-flex justify-content-md-center align-items-sm-center w-100 hide-segment" style="width: 100px; height: 80px;"><img class="rounded" src="images/mujib_100.png" alt="img-1" style="width: 100px; height: 80px; margin-right: 5px;"><img class="rounded" src="images/50years.png" alt="img-2" style="width: 100px; height: 80px;"></div>
                    </div>
                </div>
            </div>
        </div>
        </header>

        <nav id="nav" class="navbar navbar-expand-lg navbar-dark text-uppercase fw-bold">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse mainmenu" id="navbarContent">
                    <ul class="navbar-nav mx-auto text-center">
                        <li class="nav-item mx-3">
                            <a class="nav-link" href="#" data-target="home">Home</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link" href="#" data-target="about">About</a>
                            <ul>
                                <li><a href="#" data-target="">at a glance</a></li>
                            </ul>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link" href="#" data-target="">Information</a>
                            <ul>
                                <li><a href="#" data-target="">Teachers</a></li>
                                <li><a href="#" data-target="">Staff</a></li>
                                <li><a href="#" data-target="">Student</a></li>
                                <li><a href="#" data-target="">Sylebus</a></li>
                            </ul>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link" href="#" data-target="admission">Notice Board</a>
                            <ul>
                                <li><a href="#" data-target="">Notice</a></li>
                                <li><a href="#" data-target="">Official Notice</a></li>
                            </ul>
                        </li>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link" href="#" data-target="signin">Results</a>
                            <ul>
                                <li><a href="#" data-target="">Accadamic Results (2019)</a></li>
                                <li><a href="#" data-target="">Accadamic Results (2021)</a></li>
                                <li><a href="#" data-target="">Accadamic Results (2022)</a></li>
                                <li><a href="#" data-target="">Accadamic Results (2023)</a></li>
                                <li><a href="#" data-target="">Current Result</a></li>
                            </ul>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link" href="#" data-target="home">Gallery</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link" href="#" data-target="home">Payment</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link" href="#" data-target="home">LogIn</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>



   
<!-- Header Section End -->