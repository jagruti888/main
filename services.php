<?php  include("header.php") ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>She palatin</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
.single-cool-fact {
    background-color: #333;
    padding: 20px;
    text-align: center;
    border: 1px solid #c87f6a;
    transition: background-color 0.3s ease, color 0.3s ease;
    cursor: pointer;
}

.single-cool-fact .scf-text i {
    color: #c87f6a;
    font-size: 30px;
    transition: color 0.3s ease;
}

.single-cool-fact p {
    color: #c87f6a;
    transition: color 0.3s ease;
}

.single-cool-fact:hover {
    background-color: #c87f6a;
}

.single-cool-fact:hover .scf-text i,
.single-cool-fact:hover p {
    color: white;
}


    </style>



</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="cssload-container">
            <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
        </div>
    </div>


    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img d-flex align-items-center justify-content-center" style="background-image: url(img/bg-img/bg-5.jpg);">
        <div class="bradcumbContent">
            <h2>Services</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Book Now Area Start ##### -->
    <div class="book-now-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <div class="book-now-form">
                        <form action="#">
                            <!-- Form Group -->
                            <div class="form-group">
                                <label for="select1">Check In</label>
                                <select class="form-control" id="select1">
                                  <option>19 June</option>
                                  <option>20 June</option>
                                  <option>21 June</option>
                                  <option>22 June</option>
                                  <option>23 June</option>
                                  <option>24 June</option>
                                  <option>25 June</option>
                                </select>
                            </div>

                            <!-- Form Group -->
                            <div class="form-group">
                                <label for="select2">Check Out</label>
                                <select class="form-control" id="select2">
                                  <option>20 June</option>
                                  <option>21 June</option>
                                  <option>22 June</option>
                                  <option>23 June</option>
                                  <option>24 June</option>
                                  <option>25 June</option>
                                  <option>26 June</option>
                                  <option>27 June</option>
                                </select>
                            </div>

                            <!-- Form Group -->
                            <div class="form-group">
                                <label for="select3">Adults</label>
                                <select class="form-control" id="select3">
                                  <option>02</option>
                                  <option>03</option>
                                  <option>04</option>
                                  <option>05</option>
                                  <option>06</option>
                                </select>
                            </div>

                            <!-- Form Group -->
                            <div class="form-group">
                                <label for="select4">Childrens</label>
                                <select class="form-control" id="select4">
                                  <option>01</option>
                                  <option>02</option>
                                  <option>03</option>
                                  <option>04</option>
                                  <option>05</option>
                                </select>
                            </div>

                            <!-- Button -->
                            <button type="submit">Book Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Book Now Area End ##### -->

    <!-- ##### Service Intro Area Start ##### -->
    <section class="women-safety-intro">
    <div class="container">
        <div class="row align-items-center">

            <!-- Service Intro Text -->
            <div class="col-12 col-lg-6">
                <div class="service-intro-text mb-100">
                    <div class="section-heading">
                        <div class="line-"></div>
                        <h2>Empowering Women Safety</h2>
                    </div>
                    <p>
                        Discover our range of safety services designed to empower women at every step.
                        From self-defense training to emergency helplines and safe travel guidance, we
                        ensure protection and confidence wherever you go.
                    </p>
                    <a href="#" class="btn palatin-btn mt-50">Learn More</a>
                </div>
            </div>

            <!-- Services Features -->
            <div class="col-12 col-lg-6">
                <div class="row mb-100">

                    <!-- Self-Defense Training -->
                    <div class="col-12 col-sm-4">
                        <div class="single-cool-fact">
                            <div class="scf-text">
                                <i class="fa-solid fa-shield-halved" style="font-size: 30px; color: #c87f6a;"></i>
                                <p>Self-Defense Training</p>
                            </div>
                        </div>
                    </div>

                    <!-- Safe Travel Guidance -->
                    <div class="col-12 col-sm-4">
                        <div class="single-cool-fact">
                            <div class="scf-text">
                                <i class="fa-solid fa-route" style="font-size: 30px; color: #c87f6a;"></i>
                                <p>Safe Travel Guidance</p>
                            </div>
                        </div>
                    </div>

                    <!-- Emergency Helpline -->
                    <div class="col-12 col-sm-4">
                        <div class="single-cool-fact">
                            <div class="scf-text">
                                <i class="fa-solid fa-phone" style="font-size: 30px; color: #c87f6a;"></i>
                                <p>Emergency Helpline</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

    <!-- ##### Service Intro Area End ##### -->

    <!-- ##### Core Features Start ##### -->
    <section class="core-features-area">
    <div class="container">
        <div class="row justify-content-center">

            <!-- Self-Defense Training -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-core-feature mb-100">
                    <div class="bg-thumbnail bg-img" style="background-image: url(img/bg-img/self-defense.jpg);"></div>
                    <div class="feature-content">
                        <i class="fa-solid fa-shield"></i>
                        <h3>Self-Defense<br> Training</h3>
                        <p>Empower yourself with practical self-defense techniques taught by certified trainers to stay safe in any situation.</p>
                    </div>
                </div>
            </div>

            <!-- Safe Travel Guidance -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-core-feature mb-100">
                    <div class="bg-thumbnail bg-img" style="background-image: url(img/bg-img/safe-travel.jpg);"></div>
                    <div class="feature-content">
                        <i class="fa-solid fa-map-location-dot"></i>
                        <h3>Safe Travel Guidance</h3>
                        <p>Access detailed safety maps and tips for palatin travel, highlighting women-friendly zones and emergency contacts.</p>
                    </div>
                </div>
            </div>

            <!-- Emergency Helpline -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-core-feature mb-100">
                    <div class="bg-thumbnail bg-img" style="background-image: url(img/bg-img/emergency-support.jpg);"></div>
                    <div class="feature-content">
                        <i class="fa-solid fa-phone"></i>
                        <h3>Emergency Helpline Access</h3>
                        <p>Quickly connect to 24/7 women's helplines and legal support for immediate assistance during emergencies.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


    <!-- ##### Core Features End ##### -->


    <!-- ##### Services Area Start ##### -->
<section class="services-area">
    <div class="container">
        <div class="row">

            <!-- Single Service Area -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-service-area mb-100 wow fadeInUp" data-wow-delay="100ms">
                    <i class="fas fa-shield-alt"></i>
                    <h4>Self-Defense Workshops</h4>
                    <p>Certified trainers conduct workshops to equip women with practical self-defense techniques and boost their confidence in any environment.</p>
                </div>
            </div>

            <!-- Single Service Area -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-service-area mb-100 wow fadeInUp" data-wow-delay="200ms">
                    <i class="fas fa-map-marker-alt"></i>
                    <h4>Safe Travel Guidance</h4>
                    <p>Get updated tips and local area safety guides, including maps of verified safe zones and emergency support locations for women.</p>
                </div>
            </div>

            <!-- Single Service Area -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-service-area mb-100 wow fadeInUp" data-wow-delay="300ms">
                    <i class="fas fa-heart"></i>
                    <h4>Mental Health Support</h4>
                    <p>We offer access to certified mental wellness counselors and online support sessions tailored for women in need of emotional support.</p>
                </div>
            </div>

            <!-- Single Service Area -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-service-area mb-100 wow fadeInUp" data-wow-delay="400ms">
                    <i class="fas fa-bullhorn"></i>
                    <h4>Emergency Helpline Access</h4>
                    <p>Connect with local 24/7 women's helplines and legal aid in just a tap, ensuring help is always within reach.</p>
                </div>
            </div>

            <!-- Single Service Area -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-service-area mb-100 wow fadeInUp" data-wow-delay="500ms">
                    <i class="fas fa-users"></i>
                    <h4>Women-Only Events</h4>
                    <p>Join community meetups, safety training sessions, and empowerment events hosted exclusively for women.</p>
                </div>
            </div>

            <!-- Single Service Area -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-service-area mb-100 wow fadeInUp" data-wow-delay="600ms">
                    <i class="fas fa-location-dot"></i>
                    <h4>Safe Zone Locator</h4>
                    <p>Use our platform to locate the nearest women-friendly places, verified safe accommodations, and partner facilities.</p>
                </div>
            </div>

        </div>
    </div>
</section>

    



    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>
<?php  include("footer.php") ?>



