<?php
$con = mysqli_connect("localhost", "root", "", "women_safety");

// Define alert variable
$alert = "";

if (isset($_POST['submit']))
 {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Simple check (you can add more validation)

        $sql = "INSERT INTO faq VALUES ('','$name', '$email','$message')";

        if (mysqli_query($con, $sql))
         {
            $alert = "&#9989; question sent successfully!";
        } 
        else
         {
            $alert = "&#10060; Something went wrong, please try again!";
        }
    } 
   
?>

<!-- Alert Box -->
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
  <title>She palatin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
   <link rel="stylesheet" href="form.css">
 <style>



</style>

</head>
<body style="background-color: #f8f9fa;">



<!-- Banner Section -->
<section class="breadcumb-area bg-img d-flex align-items-center justify-content-center" style="background-image: url(img/bg-img/bg-8.jpg);">
  <div class="bradcumbContent">
    <h2>More_FAQs</h2>
  </div>
</section>

<!-- Form Section -->
<section class="py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-7">
        <div class="glow-border shadow-lg" style="max-width: 600px; margin: auto;">
          <h2 class="text-center mb-4" style="color:#333;font-size:40px">More FAQs</h2>

          <form method="post" action="">
            <div class="mb-3">
              <label class="form-label"style="font-size:18px;font-weight:bold">Full Name</label>
              <input type="text" class="form-control" name="name" required />
            </div>

          

            <div class="mb-3">
              <label class="form-label"style="font-size:18px;font-weight:bold">Email</label>
              <input type="email" class="form-control" name="email" required />
            </div>

            <div class="mb-3">
              <label class="form-label"style="font-size:18px;font-weight:bold">your question</label>
              <input type="text" class="form-control" name="message" required />
            </div>

            <div class="d-flex justify-content-between">
              <button type="submit" name="submit" class="btn btn-outline-dark btn-lg">Submit</button>
  
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
<?php include("footer.php"); ?>
