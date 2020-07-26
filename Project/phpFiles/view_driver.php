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
              border-top: 1px solid #ddd;
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
              border-top: 1px solid #ddd;
              padding-bottom: 15px;

            }

        </style>
    </head>
    <body>
        <br>

        <table>
            
            <?php 
                include 'db_connect.php';
                 $did = $_POST['driver_id'];
                if($did=="All"||$did=="all"){
                    $view_query = "SELECT Registration_number, Type, driver_id FROM vehicle"  ;

                    $view_result = $connection -> query($view_query);?>
                    <h3 style="margin-left: 25%;">Vehicle Details</h3><br>
                    <tr>
                        <th>ID</th>
                        <th>Registration Number</th>
                        <th>Type</th>
                    </tr>
                        <?php
                   
                    if($view_result -> num_rows > 0)
                    {
                        while($row = $view_result -> fetch_assoc())
                        {
                            ?>
                        
                        <tr>
                            <td class="td1"><?php echo $row["driver_id"];?></td>
                            <td class="td1"><?php echo $row["Registration_number"];?></td>
                            <td class="td1"><?php echo $row["Type"];?></td>
                        </tr>

                        
                        
                        <?php
                        }
                    }
                }
                else{
                    $view_query = "SELECT v.Registration_number, v.Type, v.driver_id, d.driver_first_name, d.driver_last_name, d.driver_contact FROM vehicle v, driver d WHERE v.driver_id='$did' AND v.driver_id = d.driver_ID";
                    $view_result = $connection -> query($view_query);
                    if($view_result -> num_rows > 0)
                    {
                        while($row = $view_result -> fetch_assoc())
                        {
                           
                           
                            
                                    ?>
                                    <br><br>
                                    <h3 style="margin-left: 25%;">Vehicle Details</h3><br>
                                    <tr>
                                        <th>ID</th>
                                        <td class="td2"><?php echo $row["driver_id"];?></td>
                                    </tr>
                                    <tr>
                                        <th>Registration No</th>
                                        <td class="td2"><?php echo $row["Registration_number"];?></td>
                                    </tr>
                                    <tr>
                                        <th>Type</th>
                                        <td class="td2"><?php echo $row["Type"];?></td>
                                    </tr>
                                </table><br>
                                <h3 style="margin-left: 25%;">Owner Details</h3><br>
                                <table>
                                    <tr>
                                        <th>First Name</th>
                                        <td class="td2"><?php echo $row["driver_first_name"];?></td>
                                    </tr>
                                    <tr>
                                        <th>Last Name</th>
                                        <td class="td2"><?php echo $row["driver_last_name"];?></td>
                                    </tr>
                                    <tr>
                                        <th>Contact</th>
                                        <td class="td2"><?php echo $row["driver_contact"];?></td>
                                    </tr>
                                <?php
                           
                        }
                    }

                }
            ?>
        </table>
    </body>
</html>