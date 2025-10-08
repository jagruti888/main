<?php include("header.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Records</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <link rel="stylesheet" href="form.css">
    <!-- Custom CSS -->
    <style>
        h1 {
            color: #cb8670;
            margin-top: 30px;
        }

        .table-responsive {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .custom-table {
            width: 100%;
            min-width: 1200px; /* Important for horizontal scroll on small screens */
            border: 3px solid #cb8670;
            font-size: 15px;
            white-space: nowrap; /* Prevent line break */
        }

        .custom-table thead th {
            background-color: #cb8670;
            color: white;
            border: 1px solid #cb8670;
            text-align: center;
        }

        .custom-table td, .custom-table th {
            padding: 8px;
            text-align: center;
            vertical-align: middle;
            border: 1px solid #cb8670;
        }

        .custom-table tbody tr:hover {
            background-color: #f2d9d0;
        }

        .edit-btn img,
        .delete-btn img {
            height: 30px;
            width: 30px;
        }

        @media (max-width: 768px) {
            .custom-table {
                font-size: 13px;
            }
        }

        html, body {
            overflow-x: hidden;
        }
    </style>
</head>
<body>

<!-- Banner Section -->
<section class="breadcumb-area bg-img d-flex align-items-center justify-content-center"
  style="position: relative; background-image: url('gallery/bg/a (6).jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;border-bottom:2px solid #cb8670;">
  <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;
               background-color:  rgba(0, 0, 0, 0.35); z-index: 1;"></div>
  <div class="bradcumbContent" style="position: relative; z-index: 2;">
    <h2 style="color: white;">faq Records</h2>
  </div>
</section>

<br><br>

<div class="container">
    <?php
    include("connection.php");

    $q = "SELECT * FROM faq";
    $re = mysqli_query($con, $q);

    if (mysqli_num_rows($re) > 0) {
        echo "<div class='table-responsive'>
                <table class='table custom-table table-bordered' style='border:2px solid #cb8670'>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Message</th>
                           <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>";

        while ($row = mysqli_fetch_array($re))
         {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['message']}</td>
                    <td class='delete-btn'><a href='ad_delete_faq.php?uid={$row['id']}'><img src='drop.png' alt='Delete'></a></td>
                </tr>";
        }

        echo "</tbody></table></div>";
    } else {
        echo "<div class='text-center text-danger'><strong>No records found....</strong></div>";
    }
    ?>
</div>

<br><br>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php include("footer.php"); ?>
