<?php include("header.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>she_palatin</title>

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="assets/css/all.min.css">

    <style>
        .team-container {
            gap: 30px;
            margin-top: 30px;
            flex-wrap: nowrap;
            overflow-x: auto;
            padding-bottom: 15px;
        }

        .single-team-member {
            flex: 0 0 220px;
        }

        .image-container {
            position: relative;
            width: 220px;
            height: 220px;
            margin: 0 auto 15px auto;
            border-radius: 50%;
            overflow: hidden;
        }

        .image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%;
            transition: transform 0.3s ease;
        }

        .image-container:hover img {
            transform: scale(1.05);
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.6);
            opacity: 0;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 15px;
            transition: opacity 0.3s ease;
        }

        .image-container:hover .overlay {
            opacity: 1;
        }

        .social-icon {
            color: white;
            font-size: 20px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 35px;
            height: 35px;
            border-radius: 50%;
            transition: color 0.3s ease, background-color 0.3s ease;
        }

        .social-icon i {
            font-size: 30px;
            transition: none;
        }

        .social-icon:hover {
            color: #cb8670;
        }

        .social-icon:hover i {
            transform: none !important;
        }

        @media (max-width: 768px) {
            .team-container {
                flex-wrap: wrap;
                overflow-x: visible;
                justify-content: center;
            }
        }

        .single-hotel-info {
            display: flex;
            flex-direction: column;
            height: 600px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        .hotel-info-text {
            flex-grow: 1;
            padding: 20px;
        }

        .hotel-img img {
            width: 100%;
            height: auto;
            display: block;
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
    <section class="breadcumb-area bg-img d-flex align-items-center justify-content-center" style="background-image: url(gallery/p.jpg);">
        <div class="bradcumbContent">
            <h2>About us</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### --><br><br>

    <!-- ##### About Us Area Start ##### -->
    <section class="about-us-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="about-text mb-100">
                        <div class="section-heading">
                            <div class="line-"></div>
                            <h2>What we are ?</h2>
                        </div>
                        <p style="font-size:19px;">
                            At <b>she palatin</b>, we believe that every woman deserves to feel safe, empowered, and heard — anytime, anywhere. Our mission is to create a palatin digital space where women can access support, resources, and real-time help when they need it most.

                            This platform is built by a team of passionate individuals committed to women's safety and empowerment. Whether it's reporting abuse, seeking emergency contacts, accessing safety tips, or connecting with support groups — our website is designed to bridge the gap between danger and protection.

                            We work in collaboration with safety experts, NGOs, legal advisors, and tech volunteers to ensure our tools and services are reliable, fast, and user-friendly.
                        </p>
                        <a href="#" class="btn palatin-btn mt-50">Read More</a>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="about-thumbnail mb-100">
                        <img src="img/bg-img/2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### About Us Area End ##### -->

    <!-- ##### Milestones Area Start ##### -->
    <section class="our-milestones section-padding-100-0 bg-img bg-overlay bg-fixed" style="background-image: url(img/bg-img/bg-4.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="section-heading text-center white">
                        <div class="line-"></div>
                        <h2>Our Milestones</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum.</p>
                    </div>
                </div>
            </div>

            <div class="row">

                <!-- Single Cool Facts -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <div class="scf-text">
                            <i class="fa-solid fa-users"></i>
                            <h2><span class="counter" style="font-size:50px;">888</span></h2>
                            <p style="font-size:18px;">Women Empowered</p>
                        </div>
                    </div>
                </div>

                <!-- Single Cool Facts -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <div class="scf-text">
                            <i class="fa-solid fa-shield-halved"></i>
                            <h2><span class="counter" style="font-size:50px;">158</span></h2>
                            <p style="font-size:18px;">Self-Defense</p>
                        </div>
                    </div>
                </div>

                <!-- Single Cool Facts -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact mb-100 wow fadeInUp" data-wow-delay="700ms">
                        <div class="scf-text">
                            <i class="fa-solid fa-phone"></i>
                            <h2><span class="counter" style="font-size:50px;">270</span></h2>
                            <p style="font-size:18px;">Helpline</p>
                        </div>
                    </div>
                </div>

                <!-- Single Cool Facts -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact mb-100 wow fadeInUp" data-wow-delay="900ms">
                        <div class="scf-text">
                            <i class="fa-solid fa-bullhorn"></i>
                            <h2><span class="counter" style="font-size:50px;">47</span></h2>
                            <p style="font-size:18px;">Campaigns</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ##### Milestones Area End ##### -->

    <!-- ##### Hotels Area Start ##### -->
    <section class="our-hotels-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <div class="line-"></div>
                        <h2>Our Safety Initiatives</h2>
                        <p>We are committed to empowering women through awareness, training, and support.</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center align-items-stretch">

                <!-- Single Initiative Info -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="single-hotel-info mb-100">
                        <div class="hotel-info-text">
                            <h6><span class="fa-solid fa-check"></span> Conducted 50+ self-defense training camps</h6>
                            <h6><span class="fa-solid fa-check"></span> Hosted awareness workshops in schools & colleges</h6>
                            <h6><span class="fa-solid fa-check"></span> Published free online safety guides for girls</h6>
                        </div>
                        <div class="hotel-img">
                            <img src="images/about/self-defence.png" alt="Self Defense Training" style="height:400px;width:350px;">
                        </div>
                    </div>
                </div>

                <!-- Single Initiative Info -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="single-hotel-info mb-100">
                        <div class="hotel-info-text">
                            <h6><span class="fa-solid fa-check"></span> 24/7 women helpline for immediate support</h6>
                            <h6><span class="fa-solid fa-check"></span> Collaborations with local police and NGOs</h6>
                            <h6><span class="fa-solid fa-check"></span> Emergency response network active in 10 cities</h6>
                        </div>
                        <div class="hotel-img">
                            <img src="images/about/helpline.png" alt="Women Helpline Support" style="height:400px;width:350px;">
                        </div>
                    </div>
                </div>

                <!-- Single Initiative Info -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="single-hotel-info mb-100">
                        <div class="hotel-info-text">
                            <h6><span class="fa-solid fa-check"></span> Launched mobile app with SOS features</h6>
                            <h6><span class="fa-solid fa-check"></span> Conducted social media safety campaigns</h6>
                            <h6><span class="fa-solid fa-check"></span> Assisted over 500 women in accessing legal aid</h6>
                        </div>
                        <div class="hotel-img">
                            <img src="images/about/campaign.jpeg" alt="Safety Campaign" style="height:400px;width:350px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ##### Hotels Area End ##### -->

    <!-- About Us Content -->
    <section class="about-us-area section-padding-100">
        <div class="container">
            <div class="section-heading text-center">
                <div class="line-"></div>
                <h2> Our Innovative Team</h2>
                <p>We are committed to empowering women through awareness, training, and support.</p>
            </div>
        </div>

        <div class="team-container d-flex justify-content-center flex-wrap gap-4">
            <!-- Team Member 1 -->
            <div class="single-team-member text-center position-relative">
                <div class="image-container">
                    <img src="images/team/member1.jpg" alt="Jane Doe" class="img-fluid rounded-circle" />
                    <div class="overlay">
                        <a href="" class="social-icon facebook"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="" class="social-icon instagram"><i class="fa-brands fa-instagram"></i></a>
                        <a href="" class="social-icon whatsapp"><i class="fa-brands fa-whatsapp"></i></a>
                    </div>
                </div>
                <h5>Jane Doe</h5>
                <p>Founder & CEO</p>
            </div>

            <!-- Team Member 2 -->
            <div class="single-team-member text-center position-relative">
                <div class="image-container">
                    <img src="images/team/member2.jpg" alt="Sarah Smith" class="img-fluid rounded-circle" />
                    <div class="overlay">
                        <a href="#" class="social-icon facebook"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" class="social-icon instagram"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#" class="social-icon whatsapp"><i class="fa-brands fa-whatsapp"></i></a>
                    </div>
                </div>
                <h5>Sarah Smith</h5>
                <p>Head of Outreach</p>
            </div>

            <!-- Team Member 3 -->
            <div class="single-team-member text-center position-relative">
                <div class="image-container">
                    <img src="images/team/member3.jpg" alt="Lisa Wong" class="img-fluid rounded-circle" />
                    <div class="overlay">
                        <a href="#" class="social-icon facebook"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" class="social-icon instagram"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#" class="social-icon whatsapp"><i class="fa-brands fa-whatsapp"></i></a>
                    </div>
                </div>
                <h5>Lisa Wong</h5>
                <p>Legal Advisor</p>
            </div>

            <!-- Team Member 4 -->
            <div class="single-team-member text-center position-relative">
                <div class="image-container">
                    <img src="images/team/member4.jpg" alt="Maria Lopez" class="img-fluid rounded-circle" />
                    <div class="overlay">
                        <a href="#" class="social-icon facebook"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" class="social-icon instagram"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#" class="social-icon whatsapp"><i class="fa-brands fa-whatsapp"></i></a>
                    </div>
                </div>
                <h5>Maria Lopez</h5>
                <p>Community Manager</p>
            </div>
        </div>
    </section>

   <!-- ##### Testimonial Area Start ##### -->
<section class="testimonial-area section-padding-100 bg-img" style="background-image: url(img/core-img/pattern.png);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="testimonial-content">
                    <div class="section-heading text-center">
                        <div class="line-"></div>
                        <h2>What Women Say</h2>
                    </div>

                    <!-- Testimonial Slides -->
                    <div class="testimonial-slides owl-carousel">

                        <!-- Single Testimonial -->
                        <div class="single-testimonial">
                            <p>"Thanks to this platform, I now feel safer while commuting late at night. The safety tips and emergency contacts feature helped me stay alert and confident during an uncomfortable situation."</p>
                            <h6>Priya Sharma, <span>College Student</span></h6>
                            <img src="img/core-img/trip.png" alt="testimonial image">
                        </div>

                        <!-- Single Testimonial -->
                        <div class="single-testimonial">
                            <p>"Reporting harassment used to feel intimidating, but this site made it so simple and anonymous. I finally feel heard and supported. Truly a lifeline for women like me."</p>
                            <h6>Aarushi Mehta, <span>Working Professional</span></h6>
                            <img src="img/core-img/trip.png" alt="testimonial image">
                        </div>

                        <!-- Single Testimonial -->
                        <div class="single-testimonial">
                            <p>"I encouraged my daughter to use this website. The real-time support and community space helped her deal with a tough experience. Every woman should know about this platform."</p>
                            <h6>Meena Kapoor, <span>Mother & Advocate</span></h6>
                            <img src="img/core-img/trip.png" alt="testimonial image">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Testimonial Area End ##### -->

    <?php include("footer.php"); ?>

    <!-- ##### All Javascript Script ##### -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <script src="js/bootstrap/popper.min.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <script src="js/plugins/plugins.js"></script>
    <script src="js/active.js"></script>
</body>

</html>
