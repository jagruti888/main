<?php
$con = mysqli_connect("localhost", "root", "", "women_safety");

// Define alert variable
$alert = "";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $message = $_POST['message'];

    // Simple check (you can add more validation)
    if (!empty($name) && !empty($email) && !empty($mobile) && !empty($message)) {
        $sql = "INSERT INTO contact (name, email, mobile, message) VALUES ('$name', '$email', '$mobile', '$message')";

        if (mysqli_query($con, $sql)) {
            $alert = "&#9989; Message sent successfully!";
        } else {
            $alert = "&#10060; Something went wrong, please try again!";
        }
    } else {
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
    ">
      <?php echo $alert; ?>
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

<?php
include("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact Us</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="form.css">
  
</head>
<body style="background-color: #f8f9fa;">

 
  <!-- Banner Section with Dark Overlay -->
<section class="breadcumb-area bg-img d-flex align-items-center justify-content-center"
  style="position: relative; background-image: url('gallery/bg/a (6).jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;border-bottom:2px solid #cb8670;">

  <!-- Transparent Dark Overlay -->
  <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;
               background-color:  rgba(0, 0, 0, 0.35); z-index: 1;"></div>

  <!-- Text Content -->
  <div class="bradcumbContent" style="position: relative; z-index: 2;">
    <h2 style="color: white;">Contact</h2>
  </div>
</section>
<!-- Banner Section with Dark Overlay  end -->

<section class="py-5">
  <div class="container">
   
    <div class="row justify-content-center">
      <!-- Replace this part in your code -->
<div class="col-md-7"> <!-- Reduced from col-md-8 to col-md-6 -->
  <!-- Themed Glowing Border Form -->
  <div class="glow-border shadow-lg" style="max-width: 600px; margin: auto;"> <!-- Added shadow and max-width -->
    <!-- Contact Us heading moved inside -->
    <h2 class="text-center mb-4" style="color:white;font-size:40px">Contact Us</h2>
    
    <form action="#" method="post">
      <div class="mb-3">
        <label for="name" style="font-size:18px;font-weight:bold" class="form-label">Full Name</label>
        <input type="text" class="form-control" name="name" placeholder="Enter your full name">
      </div>
      <div class="mb-3">
        <label for="email" style="font-size:18px;font-weight:bold" class="form-label">Email address</label>
        <input type="email" class="form-control" name="email" placeholder="name@example.com">
      </div>
   
            <div class="mb-3">
              <label class="form-label" style="font-size:18px;font-weight:bold">Mobile No.</label>
              <input type="text" class="form-control"  placeholder="Enter your mobile no." name="mobile" required pattern="[0-9]{10}" />
            </div>
      <div class="mb-3">
        <label for="message" style="font-size:18px;font-weight:bold" class="form-label">Message</label>
        <textarea style="border:2px solid rgb(110, 98, 98);border-radius:10px;" class="form-control" name="message" rows="4" placeholder="Write your message here..."></textarea>
      </div>
      <button type="submit" class="btn btn-outline-dark" name="submit">Send Message</button>
    </form>
  </div>
</div>

</div>

    </div>
  </div>
</section>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
include("footer.php");
?>