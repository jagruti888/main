<?php
include("header.php");
$id = $_GET['uid'];
include("connection.php");

$re = mysqli_query($con, "SELECT * FROM registration WHERE id='$id'");
$row = mysqli_fetch_array($re);
?>

<html>
<head>
    <title>Edit Contact</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="form.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            border: 2px solid #cb8670;
            width: 1000px;
            border-collapse: collapse;
        }
        table tr td {
            padding: 10px;
             background-color: #f8f0edaf !Important;
        }
        table tr td:first-child {
            font-weight: bold;
            width: 250px;
              background-color: #f8f0edaf !Important;
            color: #333;
        }
        table tr td input {
            width: 100%;
            padding: 8px;
            border: 1px solid #cb8670;
            border-radius: 5px;
        }
        .btn {
            background-color: #cb8670;
            border: none;
            padding: 10px 20px;
            font-size: 20px;
            color: white;
            border-radius: 8px;
            cursor: pointer;
            width:110px;
            height:50px;
        }
        .btn:hover {
            background-color: #904b36ff;
             color: white;
        }
        .form-heading {
            background-color: #cb8670;
            color: white;
            padding: 15px;
            text-align: center;
            font-size: 22px;
            border-radius: 6px 6px 0 0;
        }
        .table tr:hover
        {
            background-color:  #eeac94ff !Important;
        }
    </style>
</head>
<body>
  <!-- Banner Section with Dark Overlay -->
<section class="breadcumb-area bg-img d-flex align-items-center justify-content-center"
  style="position: relative; background-image: url('gallery/bg/a (6).jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;border-bottom:2px solid #cb8670;">

  <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;
               background-color:  rgba(0, 0, 0, 0.35); z-index: 1;"></div>

  <div class="bradcumbContent" style="position: relative; z-index: 2;">
    <h2 style="color: white;">Edit Registration</h2>
  </div>
</section>
    <br><br>
    <form method="post" action="#">
        <center>
        <div style="width:1000px;border:2px solid #cb8670;border-radius:8px;overflow:hidden;">
            <div class="form-heading">Edit Registration Details</div>
            <table class="table table-striped table-hover table-bordered">
                <tr><td>ID:</td><td><input type="number" name="id" class="form-control" value="<?php echo $row['id']; ?>" readonly></td></tr>
                <tr><td>Name:</td><td><input type="text" name="name" value="<?php echo $row['name']; ?>"></td></tr>
                <tr><td>Address:</td><td><input type="text" name="address" value="<?php echo $row['address']; ?>"></td></tr>
                <tr><td>Hobby:</td><td><input type="text" name="hobby" value="<?php echo $row['hobby']; ?>"></td></tr>
                <tr><td>Gender:</td><td><input type="text" name="gender" value="<?php echo $row['gender']; ?>"></td></tr>
                <tr><td>City:</td><td><input type="text" name="city" value="<?php echo $row['city']; ?>"></td></tr>
                <tr><td>Mobile No:</td><td><input type="text" name="mobileno" value="<?php echo $row['mobile_no']; ?>"></td></tr>
                <tr><td>Email:</td><td><input type="email" name="email" value="<?php echo $row['email']; ?>"></td></tr>
                <tr><td>Password:</td><td><input type="password" name="password" value="<?php echo $row['password']; ?>"></td></tr>
                <tr><td>Security Question:</td><td><input type="text" name="security_question" value="<?php echo $row['security_que']; ?>"></td></tr>
                <tr><td>Security Answer:</td><td><input type="text" name="security_answer" value="<?php echo $row['security_ans']; ?>"></td></tr>
                <tr>
                    <td colspan="2" style="text-align:center;">
                        <input type="submit" name="ok" value="Update" class="btn"/>
                    </td>
                </tr>
            </table>
        </div>
        </center>
    </form><br><br><br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

<?php
if (isset($_POST['ok'])) {
    $id = $_GET['uid'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $hobby = $_POST['hobby'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];
    $mobileno = $_POST['mobileno'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $security_question = $_POST['security_question'];
    $security_answer = $_POST['security_answer'];

    $update = "UPDATE registration SET 
        name='$name',
        address='$address',
        hobby='$hobby',
        gender='$gender',
        city='$city',
        mobile_no='$mobileno',
        email='$email',
        password='$password',
        security_que='$security_question',
        security_ans='$security_answer'
        WHERE id='$id'";

    $re = mysqli_query($con, $update);

    if ($re == 1) {
        header("location: ad_view_register.php");
    } else {
        echo "Not updated...";
    }
}
?>

<?php include("footer.php"); ?>
