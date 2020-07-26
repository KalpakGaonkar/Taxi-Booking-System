<?php 
    include("../phpFiles/db_connect.php");
    
    include("../admin/insert2.php");
    

    $did = $_POST['driver_id'];
    $regno = $_POST["reg_no"];
    $type = $_POST['type'];
    
    

    //creating query for inserting in database
    $add_query = "INSERT INTO vehicle (Registration_number, Type, driver_id) VALUES ('$regno','$type','$did')";
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