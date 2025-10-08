<?php
include("connection.php");
// Define alert variable
$alert = "";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $rating = $_POST['rating'];

    if (!empty($name) && !empty($email) && !empty($message) && !empty($rating)) {
        $sql = "INSERT INTO feedback  
                VALUES (' ','$name', '$email', '$message', '$rating')";

        if (mysqli_query($con, $sql))
         {
            $alert = "&#9989; Feedback sent successfully!";
        } 
        else 
        {
            $alert = "&#10060; Something went wrong, please try again!";
        }
    } 
    else
     {
        $alert = "&#10071; Please fill in all fields!";
    }
}
?>

<?php if (!empty($alert)): ?>
  <div id="alert-overlay" style="
    position: fixed;
    top: 0; left: 0;
    width: 100vw; height: 100vh;
    backdrop-filter: blur(7px);
    background-color: rgba(23, 17, 17, 0.3);
    z-index: 9999;
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.2s ease;
  ">
    <div style="
      background-color: rgba(231, 177, 165, 0.99);
      padding: 30px 40px;
      border-radius: 10px;
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
      color: rgb(36, 35, 35);
      font-size: 18px;
      font-weight: 600;
      font-family: 'Segoe UI', sans-serif;
      text-align: center;
      max-width: 90%;
      width: 350px;
      transform: scale(0.9);
      transition: transform 0.2s ease;
    ">      <?php echo $alert; ?>
    </div>
  </div>

  <script>
    const overlay = document.getElementById("alert-overlay");
    if (overlay) {
      overlay.style.opacity = "1";
      overlay.children[0].style.transform = "scale(1)";
      setTimeout(() => {
        overlay.style.opacity = "0";
        overlay.children[0].style.transform = "scale(0.9)";
      }, 3500);
      setTimeout(() => {
        overlay.style.display = "none";
      }, 4000);
    }
  </script>
<?php endif; ?>

<?php include("header.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>She Secure</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="form.css">
  <style>
    #stars {
      display: flex;
      font-size: 40px;
      cursor: pointer;
    }
    .star {
      color: white;
      transition: color 0.2s;
      -webkit-text-stroke: 1px black;
    }
    .star.selected {
      color: gold;
      -webkit-text-stroke: 0;
    }
  </style>
</head>
<body style="background-color: #f8f9fa;">

<!-- Breadcrumb Area -->
<section class="breadcumb-area bg-img d-flex align-items-center justify-content-center" style="background-image: url(img/bg-img/bg-8.jpg);">
    <div class="bradcumbContent">
        <h2>Feedback</h2>
    </div>
</section>

<!-- Feedback Section -->
<section class="py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-7">
        <div class="glow-border shadow-lg" style="max-width: 600px; margin: auto;">
          <h2 class="text-center mb-4" style="color:white; font-size:40px;">Give Us Your Feedback</h2>
          <form action="#" method="post">
            <div class="mb-3">
              <label class="form-label" style="font-size:18px;font-weight:bold">Full Name</label>
              <input type="text" class="form-control" name="name" placeholder="Enter your full name" required>
            </div>

            <div class="mb-3">
              <label class="form-label" style="font-size:18px;font-weight:bold">Email</label>
              <input type="email" class="form-control" name="email" placeholder="Enter your email address" required>
            </div>

            <div class="mb-3">
              <label class="form-label" style="font-size:18px;font-weight:bold">Message</label>
              <textarea class="form-control" name="message" placeholder="Your feedback..." required></textarea>
            </div>

            <div class="mb-3">
              <label class="form-label" style="font-size:18px;font-weight:bold">Rate Us</label>
              <div id="stars">
                <span class="star" data-value="1">&#9733;</span>
                <span class="star" data-value="2">&#9733;</span>
                <span class="star" data-value="3">&#9733;</span>
                <span class="star" data-value="4">&#9733;</span>
                <span class="star" data-value="5">&#9733;</span>
              </div>
              <input type="hidden" name="rating" id="rating" required>
            </div>

            <div class="text-center">
              <button type="submit" class="btn btn-outline-dark btn-lg" name="submit">Send Feedback</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- JS for star selection -->
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const stars = document.querySelectorAll('.star');
    const ratingInput = document.getElementById('rating');
    let selected = 0;

    stars.forEach(star => {
      star.addEventListener('click', () => {
        selected = parseInt(star.getAttribute('data-value'));
        ratingInput.value = selected;
        stars.forEach(s => {
          const val = parseInt(s.getAttribute('data-value'));
          s.classList.toggle('selected', val <= selected);
        });
      });
    });

    // Optional: prevent form if no rating
    document.querySelector('form').addEventListener('submit', function (e) {
      if (ratingInput.value === "") {
        e.preventDefault();
        alert("Please select a rating.");
      }
    });
  });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php include("footer.php"); ?>
