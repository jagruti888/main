
<?php include("header.php"); ?>
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

    <style>
        /* Uniform card height */
.single-rooms-area {
  position: relative;
  z-index: 10;
  width: 40px;
  height: 520px; /* Set fixed height */
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
    <section class="breadcumb-area bg-img d-flex align-items-center justify-content-center" style="background-image: url(img/bg-img/bg-8.jpg);">
        <div class="bradcumbContent">
            <h2>Safety Tips</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->
<br><br>
    
    <!-- ##### Rooms Area Start ##### -->
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

            <!-- Safety Tip Card 1 -->
            <div class="col-12 col-md-4 col-lg-4">
                <div class="single-rooms-area wow fadeInUp" data-wow-delay="100ms">
                    <div class="bg-thumbnail bg-img" style="background-image: url(images/safety-tips/img2.jpg);"></div>
                    <p>Carry Safety Tools</p>
                    <div class="rooms-text">
                        <div class="line"></div>
                        <h4  style="font-size:20px">Carry Safety Tools</h4>
                        <p>Always carry items like pepper spray or a personal alarm to stay protected.</p>
                    </div>
                    <a href="safety_tip1.php" class="book-room-btn btn palatin-btn">Learn more</a>
                </div>
            </div>

            <!-- Safety Tip Card 2 -->
            <div class="col-12 col-md-4 col-lg-4">
                <div class="single-rooms-area wow fadeInUp" data-wow-delay="200ms">
                    <div class="bg-thumbnail bg-img" style="background-image: url(images/safety-tips/img3.jpg);"></div>
                    <p>Stay Aware of Your Surroundings</p>
                    <div class="rooms-text">
                        <div class="line"></div>
                        <h4 style="font-size:20px">Stay Aware of Your Surroundings</h4>
                        <p>If something feels wrong, leave immediately and seek help.</p>
                    </div>
                    <a href="safety_tip2.php" class="book-room-btn btn palatin-btn">Learn more</a>
                </div>
            </div>

            <!-- Safety Tip Card 3 -->
            <div class="col-12 col-md-4 col-lg-4">
                <div class="single-rooms-area wow fadeInUp" data-wow-delay="300ms">
                    <div class="bg-thumbnail bg-img" style="background-image: url(images/safety-tips/img4.jpg);"></div>
                    <p>Trust Your Instincts</p>
                    <div class="rooms-text">
                        <div class="line"></div>
                        <h4  style="font-size:20px">Trust Your Instincts</h4>
                        <p>Listen to your gut feelings and act promptly if something doesn't seem right.</p>
                    </div>
                    <a href="safety_tip3.php" class="book-room-btn btn palatin-btn">Learn more</a>
                </div>
            </div>

            <!-- Safety Tip Card 4 -->
            <div class="col-12 col-md-4 col-lg-4">
                <div class="single-rooms-area wow fadeInUp" data-wow-delay="400ms">
                    <div class="bg-thumbnail bg-img" style="background-image: url(images/safety-tips/img5.jpg);"></div>
                    <p>Inform Someone About Your Plans</p>
                    <div class="rooms-text">
                        <div class="line"></div>
                        <h4  style="font-size:20px">Inform Someone About Your Plans</h4>
                        <p>Always let a trusted friend or family member know where you're going and when you expect to return.</p>
                    </div>
                    <a href="safety_tip4.php" class="book-room-btn btn palatin-btn">Learn more</a>
                </div>
            </div>

            <!-- Safety Tip Card 5 -->
            <div class="col-12 col-md-4 col-lg-4">
                <div class="single-rooms-area wow fadeInUp" data-wow-delay="500ms">
                    <div class="bg-thumbnail bg-img" style="background-image: url(images/safety-tips/img6.jpg);"></div>
                    <p>Avoid Sharing Personal Info</p>
                    <div class="rooms-text">
                        <div class="line"></div>
                        <h4  style="font-size:20px">Avoid Sharing Personal Information Publicly</h4>
                        <p>Be cautious about sharing your location or daily routine on social media to protect your privacy.</p>
                    </div>
                    <a href="safety_tip5.php" class="book-room-btn btn palatin-btn">Learn more</a>
                </div>
            </div>

            <!-- Safety Tip Card 6 -->
            <div class="col-12 col-md-4 col-lg-4">
                <div class="single-rooms-area wow fadeInUp" data-wow-delay="600ms">
                    <div class="bg-thumbnail bg-img" style="background-image: url(images/safety-tips/img7.jpg);"></div>
                    <p>Learn Basic Self-Defense</p>
                    <div class="rooms-text">
                        <div class="line"></div>
                        <h4  style="font-size:20px">Learn Basic Self-Defense</h4>
                        <p>Enroll in self-defense classes to build confidence and be prepared for emergencies.</p>
                    </div>
                    <a href="safety_tip6.php" class="book-room-btn btn palatin-btn">Learn more</a>
                </div>
            </div>

            <!-- Safety Tip Card 7 -->
            <div class="col-12 col-md-4 col-lg-4">
                <div class="single-rooms-area wow fadeInUp" data-wow-delay="700ms">
                    <div class="bg-thumbnail bg-img" style="background-image: url(images/safety-tips/img8.jpg);"></div>
                    <p>Use Well-Lit and Busy Routes</p>
                    <div class="rooms-text">
                        <div class="line"></div>
                        <h4  style="font-size:20px">Use Well-Lit and Busy Routes</h4>
                        <p>Choose routes that are well-lit and populated, especially at night. Avoid shortcuts through isolated areas.</p>
                    </div>
                    <a href="safety_tip7.php" class="book-room-btn btn palatin-btn">Learn more</a>
                </div>
            </div>

            <!-- Safety Tip Card 8 -->
            <div class="col-12 col-md-4 col-lg-4">
                <div class="single-rooms-area wow fadeInUp" data-wow-delay="800ms">
                    <div class="bg-thumbnail bg-img" style="background-image: url(images/safety-tips/img9.jpg);"></div>
                    <p>Keep Emergency Contacts Handy</p>
                    <div class="rooms-text">
                        <div class="line"></div>
                        <h4  style="font-size:20px">Keep Emergency Contacts Handy</h4>
                        <p>Save important contacts on speed dial and consider using safety apps to quickly reach help when needed.</p>
                    </div>
                    <a href="safety_tip8.php" class="book-room-btn btn palatin-btn">Learn more</a>
                </div>
            </div>

            <!-- Safety Tip Card 9 -->
            <div class="col-12 col-md-4 col-lg-4">
                <div class="single-rooms-area wow fadeInUp" data-wow-delay="900ms">
                    <div class="bg-thumbnail bg-img" style="background-image: url(images/safety-tips/img10.jpeg);"></div>
                    <p>Be Confident and Assertive</p>
                    <div class="rooms-text">
                        <div class="line"></div>
                        <h4  style="font-size:20px">Be Confident and Assertive</h4>
                        <p>Carry yourself with confidence. This often deters potential threats and keeps you safe.</p>
                    </div>
                    <a href="safety_tip9.php" class="book-room-btn btn palatin-btn">Learn more</a>
                </div>
            </div>

            <!-- Safety Tip Card 10 -->
            <div class="col-12 col-md-4 col-lg-4">
                <div class="single-rooms-area wow fadeInUp" data-wow-delay="1000ms">
                    <div class="bg-thumbnail bg-img" style="background-image: url(images/safety-tips/img11.jpg);"></div>
                    <p>Avoid Accepting Rides from Strangers</p>
                    <div class="rooms-text">
                        <div class="line"></div>
                        <h4  style="font-size:20px">Avoid Accepting Rides from Strangers</h4>
                        <p>Use trusted ride services or rides from known people only to ensure your safety.</p>
                    </div>
                    <a href="safety_tip10.php" class="book-room-btn btn palatin-btn">Learn more</a>
                </div>
            </div>
        </div>
    </div>
</section>


    <!-- ##### Rooms Area End ##### -->

     <?php include("footer.php"); ?>

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