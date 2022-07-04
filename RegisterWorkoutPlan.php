<!DOCTYPE html>
<html>
<head>
    <title>Workout Plan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 360px; padding: 20px; }
    </style>
</head>

<?  // creating a database connection 

	   $db_sid = 
   "(DESCRIPTION =
   (ADDRESS = (PROTOCOL = TCP)(HOST = DESKTOP-S02K9B7)(PORT = 1521))
   (CONNECT_DATA =
     (SERVER = DEDICATED)
     (SERVICE_NAME = abdullahh)
   )
 )";            // Your oracle SID, can be found in tnsnames.ora  ((oraclebase)\app\Your_username\product\11.2.0\dbhome_1\NETWORK\ADMIN) 
  
   $db_user = "scott";   // Oracle username e.g "scott"
   $db_pass = "tiger";    // Oracle password e.g "1234"
   $con = oci_connect($db_user,$db_pass,$db_sid); 
   if($con) 
      {} 
   else 
      { die('Could not connect to Oracle:'); }    

?>

<body>
    <br>
    <div class="text-center">
        <h2> Register Workout Plan:</h2><br><br>
    </div>

    <div class="container">       
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Employee Name</th>
                    <th>Applied Date</th>
                    <th>BPS Grade</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Rubeena Iftikhar</td>
                    <td>20-Jan-2021</td>
                    <td>14</td>
                </tr>
            </tbody>
        </table>
    </div>
    <br>

    <div class="wrapper">
        <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Select Workout Plan: 
        <span class="caret"></span></button>
        <ul class="dropdown-menu">
            <li>Plan-01</li>
            <li>Plan-02</li>
            <li>Plan-03</li>
        </ul>
        </div>
    </div>

</body>

<?
    

?>

</html>