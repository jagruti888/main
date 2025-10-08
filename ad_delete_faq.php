<?php
include("connection.php");

if (isset($_GET['uid']))
 {
    $id = $_GET['uid'];
    $q = "DELETE FROM faq WHERE id='$id'";
    if (mysqli_query($con, $q))
     {
        header("Location: ad_view_faq.php?msg=deleted");
    } 
    else
     {
        header("Location: ad_view_faq.php?msg=error");
    }
}
?>
