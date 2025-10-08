



<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['send'])) {
    $con = mysqli_connect("localhost", "root", "", "women_safety");

    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Get inputs safely
    $name =  $_POST['name'];
    $email = $_POST['email'];
    $message =  $_POST['message'];
    $rate =$_POST['rate'];

    // Insert with column names
    $sql = "INSERT INTO feedback (name, email, message, rating) 
            VALUES ('$name', '$email', '$message', '$rate')";

    if (mysqli_query($con, $sql)) 
    {
        echo "<script>alert(' &#9989; Feedback sent successfully!');</script>";
    }
     else 
     {
        echo "<script>alert('&#10060;oops!! something went wrong,please try again.');</script>";
    }

    mysqli_close($con);
}
?>
<?php include('header.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>She palatin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet" />
   <link rel="stylesheet" href="form.css">


<script>
  document.addEventListener("DOMContentLoaded", function () {
    const stars = document.querySelectorAll('.star');
    const rateInput = document.getElementById('rate');
    let selectedRating = 0;

    stars.forEach(star => {
      star.addEventListener('click', () => {
        selectedRating = parseInt(star.getAttribute('data-value'));
        rateInput.value = selectedRating; // set hidden input

        stars.forEach(s => {
          const val = parseInt(s.getAttribute('data-value'));
          s.classList.toggle('selected', val <= selectedRating);
        });
      });
    });
  });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <style>
    @media (max-width: 600px) {
      .faq-container {
        padding: 15px;
        margin: 20px;
      }
    }

    body {
      background-color: #fff5f0;
      font-family: 'Segoe UI', sans-serif;
    }

    .faq-container {
      max-width: 800px;
      background-color: #fcebe4;
      margin: 60px auto;
      padding: 30px;
      border-radius: 20px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
      overflow-y: auto;
      max-height: 80vh;
      border: 2px solid #cb8670;
    }

    .faq-header {
      text-align: center;
      color: #cb8670;
      margin-bottom: 25px;
    }

    .accordion-button {
      background-color: #f5d3c6;
      color: #6b3e2e;
      font-weight: bold;
      border-radius: 8px !important;
      transition: all 0.1s ease-in-out;
      box-shadow: none;
      cursor: pointer;
    }

    .accordion-button:not(.collapsed) {
      background-color: #cb8670;
      color: white;
      border: 2px solid #cb8670;
      box-shadow: 0 0 10px #cb8670;
    }

    .accordion-body {
      background-color: #fff5ee;
      color: #4a2d22;
      border-radius: 8px;
      padding: 15px;
    }

    .accordion-item {
      border: none;
      margin-bottom: 12px;
    }

    .faq-scroll::-webkit-scrollbar {
      width: 8px;
    }

    .faq-scroll::-webkit-scrollbar-thumb {
      background-color: #cb8670;
      border-radius: 4px;
    }

    .faq-icon {
      color: #cb8670;
      margin-right: 10px;
    }

    .accordion-button::after {
      color: #cb8670;
    }

    /* Border highlight for open panel */
    .accordion-item:has(.accordion-collapse.show) {
      border: 2px solid #cb8670;
      border-radius: 10px;
      box-shadow: 0 0 10px #cb8670;
      background-color: #fdf3ef;
    }

    .accordion-button:hover {
      transform: scale(1.02);
      border: 2px solid #8B4513 !important;
      box-shadow: 0 0 10px rgba(139, 69, 19, 0.3);
      transition: all 0.3s ease-in-out;
      z-index: 1;
    }

    .accordion-button {
      background-color: #f5d3c6;
      color: #6b3e2e;
      font-weight: bold;
      border-radius: 8px !important;
      transition: all 0.1s ease-in-out;
      box-shadow: none;
      outline: none;
    }

    .accordion-button:focus {
      outline: none !important;
      box-shadow: none !important;
      border-color: transparent !important;
    }

    .accordion-button:not(.collapsed) {
      background-color: #cb8670;
      color: white;
      border: 2px solid #cb8670;
      box-shadow: 0 0 10px #cb8670;
    }




  </style>
</head>

<body>

  <!-- Banner Section -->
  <section class="breadcumb-area bg-img d-flex align-items-center justify-content-center"
    style="background-image: url(img/bg-img/bg-8.jpg);">
    <div class="bradcumbContent">
      <h2>FAQs</h2>
    </div>
  </section>
<form method="post" action="more_faq.php">
  <div class="faq-container faq-scroll">
    <div class="faq-header">
      <h2><i class="bi bi-question-circle-fill faq-icon"></i>Frequently Asked Questions</h2>
      <p>Answers to keep you informed, prepared, and safe &#128150;</p>
    </div>

    <div class="accordion accordion-flush" id="faqAccordion">
      <!-- Question 1 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="heading1">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
            What safety apps should I install?
          </button>
        </h2>
        <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Consider apps like “bSafe”, “Sheroes”, or “CitizenCop” for emergency alerts and live tracking.
          </div>
        </div>
      </div>

      <!-- Question 2 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="heading2">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
            How can I stay safe while commuting?
          </button>
        </h2>
        <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Always inform someone about your trip, stay in well-lit areas, and avoid distractions like loud music.
          </div>
        </div>
      </div>

      <!-- Question 3 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="heading3">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
            Where can I report harassment?
          </button>
        </h2>
        <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Use helplines like 1091 or go to the nearest police station. Support from NGOs like Safecity is also available.
          </div>
        </div>
      </div>

      <!-- Question 4 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="heading4">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
            What should I do if I feel unsafe?
          </button>
        </h2>
        <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Get to a public area quickly, call emergency numbers, and share your live location with trusted contacts.
          </div>
        </div>
      </div>

      <!-- Question 5 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="heading5">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
            How can I raise awareness for women's safety?
          </button>
        </h2>
        <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Share resources, talk openly, join campaigns, and educate friends and family. Every voice matters.
          </div>
        </div>
      </div>
    </div>

   <div class="text-center">
        <button type="submit" name="sunmit" class="btn btn-outline-dark btn-lg px-5">More FAQs</button>
    </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<?php include('footer.php'); ?>
