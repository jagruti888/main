<?php
include("connection.php");

$alert = "";

if (isset($_POST['submit'])) {
    $nm = $_POST['name'];
    $add = $_POST['address'];
    $hb = isset($_POST['hobby']) ? mysqli_real_escape_string($con, implode(",", $_POST['hobby'])) : '';
    $gen = $_POST['gender'];
    $city = $_POST['city'];
    $mno = $_POST['mobile'];
    $em = $_POST['email'];
    $pass = $_POST['password']; // Note: You should hash passwords
    $sque = $_POST['sq'];
    $sans = $_POST['sa'];

    $sql = "INSERT INTO registration (name, address, hobby, gender, city, mobile_no, email, password, security_que, security_ans)
            VALUES ('$nm', '$add', '$hb', '$gen', '$city', '$mno', '$em', '$pass', '$sque', '$sans')";

    if (mysqli_query($con, $sql)) {
        $alert = "&#9989; Registered successfully!";
    } else {
        $alert = " &#10060; Registration failed! " . mysqli_error($con);
    }
}
?>

<?php include("header.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>She palatin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="style.css" rel="stylesheet" />
   <link href="form.css" rel="stylesheet" />

  <style>


  </style>
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
    overlay.style.opacity = "1";
    overlay.children[0].style.transform = "scale(1)";
    setTimeout(() => {
      overlay.style.opacity = "0";
      overlay.children[0].style.transform = "scale(0.9)";
    }, 3500);
    setTimeout(() => {
      overlay.style.display = "none";
    }, 4000);
  </script>
<?php endif; ?>

<section class="breadcumb-area bg-img d-flex align-items-center justify-content-center" style="background-image: url(img/bg-img/bg-8.jpg);">
  <div class="bradcumbContent">
    <h2>Registration</h2>
  </div>
</section>

<section class="py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-7">
        <div class="glow-border shadow-lg" style="max-width: 600px; margin: auto;">
          <h2 class="text-center mb-4" style="color:#333;font-size:40px">Registration</h2>

          <form method="post" action="">
            <div class="mb-3">
              <label class="form-label" style="font-size:18px;font-weight:bold">Full Name</label>
              <input type="text" class="form-control" name="name" required style="border:2px solid rgba(99, 79, 64, 1)"/>
            </div>

            <div class="mb-3">
              <label class="form-label" style="font-size:18px;font-weight:bold" >Address</label>
              <textarea class="form-control" name="address" required style="border:2px solid rgba(99, 79, 64, 1)" id="address"></textarea>
            </div>

            <!-- ✅ Hobby -->
            <div class="mb-3">
              <label class="form-label" style="font-size:18px;font-weight:bold">Hobby</label>
              <div class="form-control hover-box" id="hobby" style="border:2px solid rgba(99, 79, 64, 1)">
                <input type="checkbox" name="hobby[]" value="dancing" /> Dancing
                <input type="checkbox" name="hobby[]" value="reading" style="margin-left: 10px;" /> Reading
                <input type="checkbox" name="hobby[]" value="singing" style="margin-left: 10px;" /> Singing
              </div>
            </div>

            <!-- ✅ Gender -->
            <div class="mb-3">
              <label class="form-label" style="font-size:18px;font-weight:bold">Gender</label>
              <div class="form-control hover-box"  style="border:2px solid rgba(99, 79, 64, 1)">
                <input type="radio" name="gender" value="male" required /> Male
                <input type="radio" name="gender" value="female" style="margin-left: 10px;"/> Female
              </div>
            </div>

            <div class="mb-3">
              <label class="form-label" style="font-size:18px;font-weight:bold;" >City</label>
              <select class="form-control" name="city" required style="border:2px solid rgba(99, 79, 64, 1)" id="city">
                <option value="" selected disabled>-- Select your city --</option>
                <option value="ahmedabad">Ahmedabad</option>
                <option value="surat">Surat</option>
                <option value="rajkot">Rajkot</option>
                <option value="vadodara">Vadodara</option>
                <option value="gandhinagar">Gandhinagar</option>
              </select>
            </div>

            <div class="mb-3">
              <label class="form-label" style="font-size:18px;font-weight:bold">Mobile No.</label>
              <input type="text" class="form-control" name="mobile" required pattern="[0-9]{10}" style="border:2px solid rgba(99, 79, 64, 1)"/>
            </div>

            <div class="mb-3">
              <label class="form-label" style="font-size:18px;font-weight:bold">Email</label>
              <input type="email" class="form-control" name="email" required style="border:2px solid rgba(99, 79, 64, 1)"/>
            </div>

            <div class="mb-3">
              <label class="form-label" style="font-size:18px;font-weight:bold">Password</label>
              <input type="password" class="form-control" name="password" required minlength="6" style="border:2px solid rgba(99, 79, 64, 1)"/>
            </div>

            <div class="mb-3">
              <label class="form-label" style="font-size:18px;font-weight:bold">Security Question</label>
              <select class="form-control" name="sq" required style="border:2px solid rgba(99, 79, 64, 1)" id="sa">
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

            <div class="mb-3" >
              <label class="form-label" style="font-size:18px;font-weight:bold">Security Answer</label>
              <input type="text" class="form-control" name="sa" required style="border:2px solid rgba(99, 79, 64, 1)" />
            </div>

            <div class="d-flex justify-content-between">
              <button type="submit" name="submit" class="btn btn-outline-dark btn-lg">Submit</button>
              <button type="reset" class="btn btn-outline-dark btn-lg" style="width:90px;">Reset</button>
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
