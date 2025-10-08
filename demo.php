<?php
   include('header.php');
   include('configure.php');
   $r=mysqli_query($con,"select * from demo where Id=1");
   $r1=mysqli_fetch_row($r);
   //echo $r1[1];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Include Bootstrap & Font Awesome in your <head> if not already -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
       .progress-heading
       {
                font-size: 22px;
                color: #4CAF50; /* green color */
                margin-bottom: 15px;
                font-weight: bold;
        }
        .about-heading
        {
                font-size: 50px !important;
                color: #000000ff; /* green color */
                margin-bottom: 15px;
                font-weight: bold;

        }
       .circle-hover-box {
  text-align: center;
  margin: 20px;
  transition: transform 0.3s;
}

.circle-hover-box .circle-img {
  width: 500px;
  height: 500px;
  margin: 0 auto 15px;
  border-radius: 50%;
  overflow: hidden;
  transition: transform 2.9s ease;
  border: 10px solid #eee;
}

.circle-hover-box .circle-img img 
{
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: flex;
  border-radius: 50%;
  transition: transform 0.6s ease;
}

.circle-hover-box:hover .circle-img {
  transform: rotate(360deg) scale(0.8 );
  border-color: #4CAF50;
}


.single-latest-blog {
    border-radius: 8px;
    overflow: hidden;
    background: #fff;
    transition: all 0.3s ease;
}

.single-latest-blog:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.1);
}

.latest-text h4 {
    font-size: 18px;
    color: #2c2c2c;
}

.latest-text p {
    color: #555;
}
.tag-p
{margin-bottom: 1.25rem;
  font-size: 16px;
  line-height: 1.6;
  color: #333;
  font-family: 'Open Sans', sans-serif;
}
.btn-soft 
{
  display: inline-block;
  font-size:20px;
  padding: 10px 25px;
  color: #4CAF50;
  border: 2px solid #4CAF50;
  border-radius: 25px;
  text-decoration: none;
  font-weight: 600;
  transition: background-color 0.3s ease, color 0.3s ease;
  /* Fix size by including border in total size */
  box-sizing: border-box;
}

.btn-soft:hover 
{
 background-color: #4CAF50;
 font-size:20px;
  color: white;
  /* Don't change border or padding here to avoid size change */
}
 /* Responsive layout */
  @media (min-width: 992px) {
    .about-us-area .row {
      display: flex;
      align-items: center;
      justify-content: space-between;
    }
    .about-us-area .col-lg-6 {
      flex: 1 1 48%;
      max-width: 48%;
    }
  }
 @media (max-width: 991px) {
    .circle-hover-box {
      max-width: 300px;
      margin: 40px auto 20px;
      height: 300px;
    }
    .circle-hover-box .circle-img {
      height: 300px;
    }
  }





        </style>

</head>
<body>
     <!-- ##### Hero Area Start ##### -->
    <section class="hero-area">
        <div class="hero-post-slides owl-carousel">

            <!-- Single Hero Post -->
            <div class="single-hero-post bg-overlay">
                <!-- Post Image -->
                <div class="slide-img bg-img" style="background-image: url(img/background-img/1.jpg);"></div>
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <!-- Post Content -->
                            <div class="hero-slides-content text-center">
                                <h2>Plants exist in the weather and light rays that surround them</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque ante nec ipsum iaculis, ac iaculis ipsum porttitor. Vivamus cursus nisl lectus, id mattis nisl lobortis eu. Duis diam augue, dapibus ut dolor at, mattis maximus dolor.</p>
                                <div class="welcome-btn-group">
                                    <a href="#" class="btn alazea-btn mr-30">GET STARTED</a>
                                    <a href="contact.php" class="btn alazea-btn active">CONTACT US</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Hero Post -->
            <div class="single-hero-post bg-overlay">
                <!-- Post Image -->
                <div class="slide-img bg-img" style="background-image: url(img/background-img/2.jpg);"></div>
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <!-- Post Content -->
                            <div class="hero-slides-content text-center">
                                <h2>Plants exist in the weather and light rays that surround them</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque ante nec ipsum iaculis, ac iaculis ipsum porttitor. Vivamus cursus nisl lectus, id mattis nisl lobortis eu. Duis diam augue, dapibus ut dolor at, mattis maximus dolor.</p>
                                <div class="welcome-btn-group">
                                    <a href="#" class="btn alazea-btn mr-30">GET STARTED</a>
                                    <a href="#" class="btn alazea-btn active">CONTACT US</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

             <!-- Single Hero Post -->
            <div class="single-hero-post bg-overlay">
                <!-- Post Image -->
                <div class="slide-img bg-img" style="background-image: url(img/background-img/3.jpg);"></div>
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <!-- Post Content -->
                            <div class="hero-slides-content text-center">
                                <h2>Plants exist in the weather and light rays that surround them</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque ante nec ipsum iaculis, ac iaculis ipsum porttitor. Vivamus cursus nisl lectus, id mattis nisl lobortis eu. Duis diam augue, dapibus ut dolor at, mattis maximus dolor.</p>
                                <div class="welcome-btn-group">
                                    <a href="#" class="btn alazea-btn mr-30">GET STARTED</a>
                                    <a href="#" class="btn alazea-btn active">CONTACT US</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

 <!--#####ABOUT US AREA START####-->    
<section class="about-us-area section-padding-100-0">
  <div class="container" style="flex: 1; min-width: 300px;">
    <div class="row justify-content-between align-items-center">  <!-- Align vertically center -->

      
         <div class="col-12 col-lg-6">
       
        <div class="section-heading">
            <?php
             $r=mysqli_query($con,"select * from demo ");
            while($r1=mysqli_fetch_row($r))
            {
                
            ?>
          <h2 class="about-heading"><?php echo $r1[0]  ?></h2>
          <p><?php echo $r1[1]  ?>  <?php }  ?></p>
        </div>
        <h6><strong>Transforming Agriculture Through Innovation</strong></h6>
        <h6><strong><?php    echo $r1[1];  ?></strong></h6>
        <p class="tag-p">AT Ecoroots we helps farmers grow better crops using smart technology. We use tools that check soil, water, and weather to save time and money.</p>

        
    <!-- ##### Cool Facts Area End ##### -->

</body>
</html>
<?php
    include('footer.php');
    ?>