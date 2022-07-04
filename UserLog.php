<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title> User Log Insertion </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 400px; padding: 20px; }
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
    <div class="wrapper">
        <h2>Enter Today's Log:</h2>
        <br>
        <form action="" method="post">
            <div class="form-group">
                <label  class="font-weight-bold">Number of exercises performed out of total: </label>
                <input type="text" name="nexercise" class="form-control">
            </div>    
            <div class="form-group">
                <label class="font-weight-bold">Calories Taken: </label>
                <input type="text" name="caltaken" class="form-control">
            </div>
            <div class="form-group">
                <label class="font-weight-bold">Carbohydrates Taken: </label>
                <input type="text" name="carbtaken" class="form-control">
            </div>
            <div class="form-group">
                <label class="font-weight-bold">Protiens Taken: </label>
                <input type="text" name="protaken" class="form-control">
            </div>
            <div class="form-group">
                <label class="font-weight-bold">Fats Taken: </label>
                <input type="text" name="fattaken" class="form-control">
            </div>
            <div class="form-group">
                <label class="font-weight-bold">New Weight: </label>
                <input type="text" name="weight" class="form-control">
            </div>
            <div class="form-group">
                <label class="font-weight-bold">New Height: </label>
                <input type="text" name="height" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" name="save" class="btn btn-primary" value="Save">
            </div>
        </form>
    </div>
</body>

<?

    if(isset($_POST["save"])){


    }    


?>

</html>