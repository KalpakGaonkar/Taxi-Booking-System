<!DOCTYPE html>
<html>
    <head>
        <style type="text/css">
              table {
              border-collapse: collapse;
              width: 50%;
              margin-left: 25%;
            }


            th{
              padding: 8px;
              text-align: left;
              border-bottom: 1px solid #ddd;
              background-color:  white;
              color: black;
              padding-top: 15px;
              padding-bottom: 15px;
            }
            .td1 {
              padding: 8px;
              text-align: left;
              border-bottom: 1px solid #ddd;
              padding-top: 15px;
              padding-bottom: 15px;

            }
            .td2 {
              padding: 8px;
              text-align: left;
              border-left: 1px solid #ddd;
              border-bottom: 1px solid #ddd;
              padding-top: 15px;
              padding-bottom: 15px;

            }
        </style>
    </head>
    <body>
        <table>
            
            <?php 
                include '../phpFiles/db_connect.php';
                 $did=$_POST['driver_id'];
                 if($did=="All"||$did=="all"){
                    $view_query = "SELECT driver_ID, driver_first_name, driver_last_name, driver_location, driver_contact FROM driver"  ;  
                    $view_result = $connection -> query($view_query);?>
                    <h3 style="margin-left: 25%;">Driver Details</h3><br>
                    <tr>
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Location</th>
                            <th>Contact No</th>
                        </tr>
                        <?php
                    if($view_result -> num_rows > 0)
                {
                    while($row = $view_result -> fetch_assoc())
                    {
                        ?>
                        
                        <tr>
                            <td class="td1"><?php echo $row["driver_ID"];?></td>
                            <td class="td1"><?php echo $row["driver_first_name"];?></td>
                            <td class="td1"><?php echo $row["driver_last_name"];?></td>
                            <td class="td1"><?php echo $row["driver_location"];?></td>
                            <td class="td1"><?php echo $row["driver_contact"];?></td>
                        </tr>

                        
                        
                        <?php
                    }
                }
                 }
                 else{
                $view_query = "SELECT v.Registration_number, v.Type, v.driver_id, d.driver_first_name, d.driver_last_name, d.driver_location, d.driver_contact FROM vehicle v, driver d WHERE v.driver_id='$did' AND v.driver_id =d.driver_ID"  ;  

                $view_result = $connection -> query($view_query);
                
                if($view_result -> num_rows > 0)
                {
                    while($row = $view_result -> fetch_assoc())
                    {
                        ?>
                        <h3 style="margin-left: 25%;">Driver Details</h3><br>
                        <tr>
                            <th>ID</th>
                            <td class="td2"><?php echo $row["driver_id"];?></td>
                        </tr>
                        <tr>
                            <th>First Name</th>
                            <td class="td2"><?php echo $row["driver_first_name"];?></td>
                        </tr>
                        <tr>
                            <th>Last Name</th>
                            <td class="td2"><?php echo $row["driver_last_name"];?></td>
                        </tr>
                        <tr>
                            <th>Location</th>
                            <td class="td2"><?php echo $row["driver_location"];?></td>
                        </tr>
                        <tr>
                            <th>Contact No</th>
                            <td class="td2"><?php echo $row["driver_contact"];?></td>
                        </tr>
                    </table>
                    <br>
                        <h3 style="margin-left: 25%;">Vehicle Detalis</h3>
                        <br>
                        <table>
                        <tr>
                            <th>Registration No</th>
                            <td class="td2"><?php echo $row["Registration_number"];?></td>
                        </tr>
                        <tr>
                            <th>Type</th>
                            <td class="td2"><?php echo $row["Type"];?></td>
                        </tr>

                        
                        
                        <?php
                    }
                }
            }
                
            ?>
        </table>
    </body>
</html>