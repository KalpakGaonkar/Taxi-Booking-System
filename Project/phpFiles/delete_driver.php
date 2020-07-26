<?php 
    include ('db_connect.php');
    include("../admin/delete2.php");
    $did = $_POST['driver_id'];

    $delete_query = "DELETE FROM vehicle WHERE driver_id='$did'";
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