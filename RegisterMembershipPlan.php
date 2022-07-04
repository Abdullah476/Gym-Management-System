<!DOCTYPE html>
<html>
<head>
    <title>Membership Plan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 450; padding: 20px; }
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
        <h2> Register Membership Plan:</h2><br><br>
    </div>

    <div class="container">       
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Plan ID</th>
                    <th>Goal</th>
                    <th>Total Days</th>
                    <th>Charges</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Weight Lost and Body Shape tuning</td>
                    <td>100</td>
                    <td>340</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Muscle Gain</td>
                    <td>123</td>
                    <td>230</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Lose Fat and Gain Muscle</td>
                    <td>120</td>
                    <td>600</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Light Fitness Routine</td>
                    <td>365</td>
                    <td>530</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Upper Body Focused</td>
                    <td>80</td>
                    <td>470</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Back and Leg Focused</td>
                    <td>80</td>
                    <td>200</td>
                </tr>
            </tbody>
        </table>
    </div>
    <br>

    <div class="wrapper">
    <form action="RegisterWorkoutPlan.php" method="post">
    <h4>
        <label for="mplans">Choose a Membership Plan:</label>
        <select name="mplans" id="plans">
            <option name="mplans1" value="plan1">Plan-01</option>
            <option name="mplans2" value="plan2">Plan-02</option>
            <option name="mplans3" value="plan3">Plan-03</option>
            <option name="mplans4" value="plan4">Plan-04</option>
            <option name="mplans5" value="plan5">Plan-05</option>
            <option name="mplans6" value="plan6">Plan-06</option>
            <option name="mcustom" value="custom">Custom</option>
        </select>
    <br>
    </h4>
    <div class="form-group">
        <input type="submit" name="next" class="btn btn-primary" value="Next">
    </div>
    </form>
    </div>

</body>

<?
    

?>

</html>