<?php
include("connection.php");

$alert = "";

if (isset($_POST['forgot'])) {
    // Sanitize inputs
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $s_que = mysqli_real_escape_string($con, $_POST['sq']);
    $s_ans = mysqli_real_escape_string($con, $_POST['sa']);

    // Make sure these column names match your DB
    $select = "SELECT password FROM registration WHERE email='$email' AND security_que='$s_que' AND security_ans='$s_ans'";
    $q = mysqli_query($con, $select);

    if (mysqli_num_rows($q) === 1)
     {
        $row = mysqli_fetch_assoc($q);
        $alert = " &#128274; Your password is: <span style='color:rgb(244, 238, 238);'>{$row['password']}</span>";
    }
     else 
     {
        $alert = "&#10060; Invalid details. Please check your inputs.";
    }
}
?>

<?php include("header.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>She palatin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="form.css">
</head>
<body style="background-color: #f8f9fa;">

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
    overlay.style.display = "flex";
    setTimeout(() => {
      overlay.style.opacity = "1";
      overlay.children[0].style.transform = "scale(1)";
    }, 100);
    setTimeout(() => {
      overlay.style.opacity = "0";
      overlay.children[0].style.transform = "scale(0.9)";
    }, 3500);
    setTimeout(() => {
      overlay.style.display = "none";
    }, 4000);
  </script>
<?php endif; ?>

<!-- Breadcumb -->
<section class="breadcumb-area bg-img d-flex align-items-center justify-content-center" style="background-image: url(img/bg-img/bg-8.jpg);">
    <div class="bradcumbContent">
        <h2>Forgot Password</h2>
    </div>
</section>

<!-- Form -->
<section class="py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-7">
        <div class="glow-border shadow-lg" style="max-width: 600px; margin: auto;">
          <h2 class="text-center mb-4" style="color:#5a3e28; font-size:40px; font-weight:bold;">Forgot Password</h2>
          <form method="POST" action="">

            <div class="mb-3">
              <label class="form-label"style="font-size:18px;font-weight:bold">Email</label>
              <input type="email" class="form-control" name="email" required />
            </div>

            <div class="mb-3">
              <label class="form-label"style="font-size:18px;font-weight:bold">Security Question</label>
              <select class="form-control" name="sq" required>
                <option value="">--Select a question--</option>
                <option value="pet">What was the name of your first pet?</option>
                <option value="school">What is the name of your elementary school?</option>
                <option value="mother-maiden">What is your mother's maiden name?</option>
                <option value="first-car">What was the make of your first car?</option>
                <option value="favorite-teacher">Who was your favorite teacher?</option>
                <option value="birth-city">In what city were you born?</option>
                <option value="first-job">What was your first job?</option>
                <option value="childhood-nickname">What was your childhood nickname?</option>
                <option value="best-friend">What is the name of your best friend in high school?</option>
              </select>
            </div>

            <div class="mb-3">
              <label class="form-label" style="font-size:18px;font-weight:bold">Security Answer</label>
              <input type="text" class="form-control" name="sa" required />
            </div>

            <div class="text-center">
              <button type="submit" name="forgot" class="btn btn-outline-dark btn-lg" style="font-size:18px;font-weight:15px;">Recover Password</button>
            </div>

            <div class="mt-3 text-center">
              <a href="login.php" style="text-decoration: none;">Back to login</a>
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
