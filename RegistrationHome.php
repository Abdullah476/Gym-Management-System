<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
</head>

<?php  // creating a database connection

	session_start();

	   $db_sid = "(DESCRIPTION = (ADDRESS = (PROTOCOL = TCP)(HOST = DESKTOP-LN8EDCQ)(PORT = 1521)) (CONNECT_DATA = (SERVER = DEDICATED) (SERVICE_NAME = ejazz)))";            // Your oracle SID, can be found in tnsnames.ora  ((oraclebase)\app\Your_username\product\11.2.0\dbhome_1\NETWORK\ADMIN) 
  
   $db_user = "scott";   // Oracle username e.g "scott"
   $db_pass = "tiger";    // Oracle password e.g "1234"
   $con = oci_connect($db_user,$db_pass,$db_sid); 
   if($con) 
      {} 
   else 
      { die('Could not connect to Oracle:'); }    

?>

<body>

    <!-- Bootstrap Link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Fonts Link -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <!-- CSS Link -->
	<link rel="stylesheet" type="text/css" href="styles.css">

<div class="container">
	<div class="d-flex justify-content-center h-100">
        <div class="heading">
            <label>FIT-ME</label>
        </div>
		<div class="card">
			<div class="card-header">
				<h3>Register</h3>
			</div>
			<div class="card-body">
				<form action="" method="post">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-envelope"></i></span>
						</div>
						<input type="text" name="email" class="form-control" placeholder="email">
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" name="username" class="form-control" placeholder="username">
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" name="password" class="form-control" placeholder="password">
					</div>
					<div class="form-group">
						<input type="submit" name="register" value="Register" class="btn float-right login_btn">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<?php

    if(isset($_POST["register"])){
        
        if(isset($_POST["username"])){

            if(isset($_POST["password"])){

                if($_POST["username"] != $_POST["password"]){
					
					$_SESSION["_email"] = $_POST["email"];
					$_SESSION["_username"] = $_POST["username"];
					$_SESSION["_password"] = $_POST["password"];

                    header("Location: RegisterPersonalInformation.php");
                    die();         
                }
            }
        }
    }

?>

</body>
</html>