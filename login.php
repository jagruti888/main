<?php
$con = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($con, "women_safety");

// Define alert variable
$alert = "";

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password =  $_POST['password'];

    $query = mysqli_query($con, "SELECT * FROM registration WHERE email='$email' AND password='$password'");
    $rows = mysqli_num_rows($query);

    if ($rows == 1)
     {
        session_start();
        $_SESSION['sid'] = $email;
        header("Location: home.php");
        exit;
    }
     else 
     {
        $alert = "&#10060;  Email or password is invalid!";
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

<?php  include("header.php");?>
<html lang="en">
<head>
  
  <title>She palatin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
   <link rel="stylesheet" href="form.css">
</head>

<body>

    
    

 <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img d-flex align-items-center justify-content-center" style="background-image: url(img/bg-img/bg-8.jpg);">
        <div class="bradcumbContent">
            <h2>login</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

  <!-- Login Form Section -->
  <section class="py-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="glow-border shadow-lg" style="max-width: 500px; margin: auto;">
            <h2 class="text-center mb-4" style="color:#5a3e28; font-size:40px; font-weight:bold;">Login</h2>
            <form action="#" method="post">

              <div class="mb-3">
                <label for="email" class="form-label" style="font-size:18px; font-weight:bold">Email Address</label>
                <input type="email" class="form-control"  name="email" placeholder="Enter your email" required />
              </div>

              <div class="mb-3">
                <label for="password" class="form-label" style="font-size:18px; font-weight:bold">Password</label>
                <input type="password" class="form-control"  name="password" placeholder="Enter your password" required />
              </div>

             

              <div class="text-center">
                <button type="submit" name="login" class="btn btn-outline-dark btn-lg px-5">Login</button>
              </div>

              <div class="mt-3 text-center">
                <a href="forgot.php" style="text-decoration: none;">Forgot Password?</a>
                
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

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
 <?php include("footer.php"); ?>
