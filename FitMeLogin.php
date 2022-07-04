<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>

<?php
	session_start();

	$db_sid = "(DESCRIPTION = (ADDRESS = (PROTOCOL = TCP)(HOST = DESKTOP-LN8EDCQ)(PORT = 1521)) (CONNECT_DATA = (SERVER = DEDICATED) (SERVICE_NAME = ejazz)))";
	$db_user = "scott";   // Oracle username e.g "scott"
	$db_pass = "tiger";    // Password for user e.g "1234"
	
	$con = oci_connect($db_user,$db_pass,$db_sid); 
	
	if ($con) {
		echo "Connected!";
	}
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
				<h3>Sign In</h3>
			</div>
			<div class="card-body">
				<form action="" method="post">
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
						<input type="submit" name="loginbutton" value="Login" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Don't have an account? <a href="RegistrationHome.php">Sign Up</a>
				</div>
			</div>
		</div>
	</div>
</div>

<?php


    if(isset($_POST["loginbutton"])){

		$query = "select password from credentials where username = '".$_POST["username"]."' and password = '".$_POST["password"]."'";
		$queryid = oci_parse($con, $query);
		$reply = oci_execute($queryid);
		
		if ( $rows = oci_fetch_array($queryid) ) {
			
			$_SESSION["uname"] = $_POST["username"];
			$_SESSION["pass"] = $_POST["password"];
			
			header('Location: UserInfo.php');
			exit;
		} else {
			header('Location: FitMeLogin.php');
			exit;
		}
    }

?>

</body>
</html>