<?php 
    include ('db_connect.php');
    include("../admin/delete1.php");
    $did = $_POST['driver_id'];

    $delete_query = "DELETE FROM driver WHERE driver_ID='$did'";
    $delete_result = mysqli_query($connection,$delete_query);
    if($delete_result)
    {
        echo "DELETION SUCCESSFUL";
    }
    else
    {
        die('QUERY FAILED'.mysqli_error($connection));
    }
?>