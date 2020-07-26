<?php include '../phpFiles/db_connect.php';
include("../admin/update1.php");

//we will be updating according to the driver id;
$did = $_POST['driver_id'];
$contact = $_POST['contact'];


$update_query = "UPDATE driver SET driver_contact = '$contact'  WHERE driver_ID = '$did'";
$update_result = mysqli_query($connection,$update_query);
if($update_result)
{
    echo "UPDATION SUCCESSFUL";
}
else
{
    die('QUERY FAILED'.mysqli_error($connection));
}
?>