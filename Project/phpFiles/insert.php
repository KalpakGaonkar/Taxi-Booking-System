<?php 
    include("../phpFiles/db_connect.php");
    
    include("../admin/insert1.php");
    

    $did = $_POST['driver_id'];
    $fname = $_POST["fname"];
    $lname = $_POST['lname'];
    $duname = $_POST['driver_uname'];
    $dpass = $_POST['driver_pass'];
    $contact = $_POST['contact'];
    

    //creating query for inserting in database
    $add_query = "INSERT INTO driver (driver_ID,driver_first_name,driver_last_name,driver_username,driver_location,driver_contact) VALUES ('$did','$fname','$lname','$duname','$dpass','$contact')";
    $add_result = mysqli_query($connection,$add_query);
    if($add_result)
    {
        echo "INSERTION SUCCESSFUL";

    }
    else
    {
        die('QUERY FAILED'.mysqli_error());
    }

?>