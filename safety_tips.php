<?php
include('header.php');
include('connection.php');

// Fetch all safety tips
$result = mysqli_query($con, "SELECT * FROM safety_tips");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>She Palatin</title>
    <link rel="icon" href="img/core-img/favicon.ico">
    <link rel="stylesheet" href="style.css">

    <style>
        /* Card layout */
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

        .single-rooms-area .bg-thumbnail {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 10;
            background-size: cover;
            background-position: center;
        }

        .rooms-text {
            position: absolute;
            z-index: 30;
            background-color: rgba(0, 0, 0, 0.7);
            padding: 20px;
            left: 20px;
            right: 20px;
            bottom: 20px;
            width: calc(100% - 40px);
            height: 190px;
            border: 2px solid #cb8670;
            text-align: center;
            display: flex;
            flex-direction: column;
            overflow: hidden;
        }

        .rooms-text .line {
            width: 90px;
            height: 2px;
            background-color: #cb8670;
            display: block;
            margin: 0 auto 10px;
            flex-shrink: 0;
        }

        .rooms-text .scrollable-content {
            overflow-y: auto;
            flex-grow: 1;
        }

        .rooms-text h4 {
            color: #fff;
            font-size: 18px;
            margin-bottom: 10px;
        }

        .rooms-text p {
            color: #fff;
            font-size: 14px;
            margin: 0;
        }

        .single-rooms-area .book-room-btn {
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 50;
        }

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

    <!-- Breadcumb Area -->
    <section class="breadcumb-area bg-img d-flex align-items-center justify-content-center"
        style="background-image: url(img/bg-img/bg-8.jpg);">
        <div class="bradcumbContent">
            <h2>Safety Tips</h2>
        </div>
    </section>

    <br><br>

    <!-- Rooms Area -->
    <section class="rooms-area section-padding-0-100">
        <div class="container">

        

            <!-- Heading -->
            <div class="row justify-content-center">
                <div class="col-12 col-lg-6">
                    <div class="section-heading text-center">
                        <div class="line-"></div>
                        <h2 style="font-size:40px">Safety Tips for Everyday Life</h2>
                        <p>Learn how to stay safe in different situations — while commuting, online, or at home.</p>
                    </div>
                </div>
            </div>

            <!-- Tips Cards -->
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
    </section>

    <?php include("footer.php"); ?>

    <!-- JavaScript -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <script src="js/bootstrap/popper.min.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <script src="js/plugins/plugins.js"></script>
    <script src="js/active.js"></script>
</body>

</html>
