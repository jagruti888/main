<?php

include('header.php');
include('connection.php');



// Fetch all safety tips
$result = mysqli_query($con, "SELECT * FROM safety_tips where id in(1,2,3)");
?>
<!DOCTYPE html>
<html lang="en">

<head>
   

                <!-- Title -->
                <title>She palatin</title>

                <!-- Favicon -->
                <link rel="icon" href="img/core-img/favicon.ico">

                <!-- Core Stylesheet -->
                <link rel="stylesheet" href="style.css">
                

                <style>

                /* Uniform card height */
      .single-rooms-area {
            position: relative;
            z-index: 10;
            height: 520px;
            margin-bottom: 100px;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            transition-duration: 500ms;
        }

            /* Image part fits full height */
            .single-rooms-area .bg-thumbnail {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0; left: 0; right: 0; bottom: 0;
            z-index: 10;
            background-size: cover;
            background-position: center;
            }

            /* Black content box at bottom - fixed height */
            .single-rooms-area .rooms-text {
            position: absolute;
            z-index: 30;
            background-color: rgba(0, 0, 0, 0.7);
            padding: 30px 30px 40px;
            left: 20px;
            right: 20px;
            bottom: 20px;
            width: calc(100% - 40px);
            height: 190px; /* ✅ Fixed height to keep all same */
            overflow: auto;
            border: 2px solid #cb8670;
            text-align: center;
            transition-duration: 500ms;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            }

            /* Inside text content spacing */
            .rooms-text .line {
            width: 90px;
            height: 2px;
            background-color: #cb8670;
            display: block;
            margin: 0 auto 10px;
            }

            .rooms-text h4 {
            color: #fff;
            font-size: 18px;
            margin-bottom: 10px;
            }

            .rooms-text p {
            color: #fff;
            margin: 0;
            font-size: 14px;
            }

            /* Learn More Button positioning */
            .single-rooms-area .book-room-btn {
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 50;
            }

            /* Optional: Reduce card width slightly */
            .col-lg-4 {
            max-width: 30%;
            flex: 0 0 30%;
            padding: 10px;
            }



            /* Control card width */
            .custom-row .col-lg-4 {
            flex: 0 0 28%;
            max-width: 28%;
            margin: 15px;
            }

            @media (max-width: 991px) {
            .custom-row .col-lg-4 {
                flex: 0 0 45%;
                max-width: 45%;
            }
            }

            @media (max-width: 767px) {
            .custom-row .col-lg-4 {
                flex: 0 0 90%;
                max-width: 90%;
            }
            }



                    .about-key-text {
            position: relative;
            z-index: 1;
            margin-top: 35px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
            }

            .about-key-text h6 {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            margin-bottom: 20px;
            font-size: 16px;
            color: #2e2c2c;
            font-family: 'Nirmala Text', sans-serif;
            gap: 15px; /* spacing between icon and text */
            }

            .about-key-text h6 span {
            background-color: #cb8670;
            color: #ffffff;
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            font-size: 14px;
            }


                </style>
</head>

<body>
   

    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area">
        <div class="hero-slides owl-carousel">

            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url(images/slider/slide4.jpg);"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-9">
                            <!-- Slide Content -->
                            <div class="hero-slides-content" data-animation="fadeInUp" data-delay="100ms">
                                <div class="line" data-animation="fadeInUp" data-delay="100ms"></div>
                                <h2 data-animation="fadeInUp" data-delay="500ms">Woman Walking Alone at Night</h2>
                                <p data-animation="fadeInUp" data-delay="700ms">A woman walking alone on a city street at night — captures vulnerability and the need for public safety.
            Ideal for hero section or awareness banner.</p>
                                <a href="#" class="btn palatin-btn mt-50" data-animation="fadeInUp" data-delay="900ms">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url(images/slider/slide2.png);"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-9">
                            <!-- Slide Content -->
                            <div class="hero-slides-content" data-animation="fadeInUp" data-delay="100ms">
                                <div class="line" data-animation="fadeInUp" data-delay="300ms"></div>
                                <h2 data-animation="fadeInUp" data-delay="500ms">Female Engineer at Power Station</h2>
                                <p data-animation="fadeInUp" data-delay="700ms">A confident female professional in safety gear — represents strength, workplace safety, and empowerment.
            Great for professional safety messages.</p>
                                <a href="#" class="btn palatin-btn mt-50" data-animation="fadeInUp" data-delay="900ms">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



         <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url(images/slider/slide3.png);"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-9">
                            <!-- Slide Content -->
                            <div class="hero-slides-content" data-animation="fadeInUp" data-delay="100ms">
                                <div class="line" data-animation="fadeInUp" data-delay="300ms"></div>
                                <h2 data-animation="fadeInUp" data-delay="500ms">Factory Worker Woman Portrait</h2>
                                <p data-animation="fadeInUp" data-delay="700ms">Woman in safety uniform and protective glasses — useful for showing women in labor roles with safety awareness.
        Can be used in awareness or workplace safety sections.</p>
                                <a href="#" class="btn palatin-btn mt-50" data-animation="fadeInUp" data-delay="900ms">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            




            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url(images/slider/slide.png);"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-9">
                            <!-- Slide Content -->
                            <div class="hero-slides-content" data-animation="fadeInUp" data-delay="100ms">
                                <div class="line" data-animation="fadeInUp" data-delay="300ms"></div>
                                <h2 data-animation="fadeInUp" data-delay="500ms">Woman Engineer at Construction Site</h2>
                                <p data-animation="fadeInUp" data-delay="700ms">Woman with a hard hat and clipboard — showing leadership, caution, and determination.
            Excellent for "Empowered Women" section or career safety.</p>
                                <a href="#" class="btn palatin-btn mt-50" data-animation="fadeInUp" data-delay="900ms">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
       

    </section>

    <!-- ##### Hero Area End ##### -->
     <br><br>
  <!-- ##### About Us Area Start ##### -->
    <section class="about-us-area">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-12 col-lg-6">
                    <div class="about-text text-center mb-100">
                        <div class="section-heading text-center">
                            <div class="line-"></div>
                            <h2>About us</h2>
                        </div>
                        <p style="color:#2e2c2c;font-family:Nirmala Text;font-size:16px;">At <b>She palatin</B>, we believe that every woman deserves to feel safe, empowered, and heard — anytime, anywhere. Our mission is to create a palatin digital space where women can access support, resources, and real-time help when they need it most.

               This platform is built by a team of passionate individuals committed to women's safety and empowerment. </p>
                <p style="color:#2e2c2c;font-family:Nirmala Text;font-size:16px;">Whether it's reporting abuse, seeking emergency contacts, accessing safety tips, or connecting with support groups - our website is designed to bridge the gap between danger and protection.

                We work in collaboration with safety experts, NGOs, legal advisors, and tech volunteers to ensure our tools and services are reliable, fast, and user-friendly.

                Together, let's build a safer tomorrow — one step at a time.</p>
                        <div class="about-key-text">
                            <h6><span class="fa fa-check"></span> 24x7 Emergency Helpline Support</h6>
                            <h6><span class="fa fa-check"></span> Verified Safety Resources & Tips </h6>
                            <h6><span class="fa fa-check"></span>  Trusted NGO & Legal Support Access</h6>
                        </div>
                        <a href="#" class="btn palatin-btn mt-50">Read More</a>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="about-thumbnail homepage mb-100">
                        <!-- First Img -->
                        <div class="first-img wow fadeInUp" data-wow-delay="100ms">
                            <img src="img/bg-img/5.jpg" alt="">
                        </div>
                        <!-- Second Img -->
                        <div class="second-img wow fadeInUp" data-wow-delay="300ms">
                            <img src="img/bg-img/6.jpg" alt="">
                        </div>
                        <!-- Third Img-->
                        <div class="third-img wow fadeInUp" data-wow-delay="500ms">
                            <img src="img/bg-img/7.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### About Us Area End ##### -->

    <section class="rooms-area section-padding-0-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6">
                <div class="section-heading text-center">
                    <div class="line-"></div>
                    <h2 style="font-size:40px">Safety Tips for Everyday Life</h2>
                    <p>Learn how to stay safe in different situations — while commuting, online, or at home.</p>
                </div>
            </div>
        </div>

      <div class="row justify-content-center custom-row">

            <?php
                while ($row = mysqli_fetch_assoc($result)) 
                {
                    $title =$row['title'];
                    $paragraph = $row['paragraph'];
                    $image =$row['image'];
                    $link =$row['link'];

                    echo "
                        <div class='col-12 col-md-4 col-lg-4'>
                            <div class='single-rooms-area wow fadeInUp' data-wow-delay='400ms'>
                                <div class='bg-thumbnail bg-img' style='background-image: url(images/safety-tips/{$image});'></div>
                                <div class='rooms-text'>
                                    <div class='line'></div>
                                    <div class='scrollable-content'>
                                        <h4>{$title}</h4>
                                        <p>{$paragraph}</p>
                                    </div>
                                </div>
                                <a href='{$link}' class='book-room-btn btn palatin-btn'>Learn more</a>
                            </div>
                        </div>";
                }
                ?>
        </div>
    </div>
  <center> 
    <div class="menu-btn">
        <a href="safety_tips.php" class="btn palatin-btn" style="margin-left:-10px;">EXplore more</a>
    </div>
  </center>
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

   <!-- ##### CTA Help Area Start ##### -->
<section class="cta-help-area bg-img" style="background-image: url('img/bg-img/help.jpg'); padding: 60px 0; background-size: cover; background-position: center;">
    <div class="container text-center text-white">
        <h2>Need Help Right Now?</h2>
        <p>Call our 24/7 women helpline or access nearby support centers</p>
        <a href="tel:1091" class="btn palatin-btn mt-3">&#x1F4DE; Call 1091</a>
        <a href="support.php" class="btn palatin-btn mt-3">&#127977;  Find Support</a>
    </div>
</section>
<!-- ##### CTA Help Area End ##### -->



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
<?php include('footer.php'); ?>