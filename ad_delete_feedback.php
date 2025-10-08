<?php
include("connection.php");

if (isset($_GET['uid']))
 {
    $id = $_GET['uid'];
    $q = "DELETE FROM feedback WHERE id='$id'";
    if (mysqli_query($con, $q))
     {
        header("Location: ad_view_feedback.php?msg=deleted");
    } 
    else
     {
        header("Location: ad_view_feedback.php?msg=error");
    }
}
?>
