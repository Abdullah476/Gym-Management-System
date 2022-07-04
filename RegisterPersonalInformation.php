<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Personal Information</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 360px; padding: 20px; }
    </style>
</head>

<body>
    <div class="wrapper">
        <h2>Personal Information:</h2>

        <form action="" method="post">
            <div class="form-group">
                <label  class="font-weight-bold">First Name: </label>
                <input type="text" name="fname" class="form-control" placeholder="first name">
            </div>    
            <div class="form-group">
                <label class="font-weight-bold">Last Name: </label>
                <input type="text" name="lname" class="form-control" placeholder="last name">
            </div>
            <div class="form-group">
                <label class="font-weight-bold">Date of Birth: </label>
                <input type="text" name="dob" class="form-control" placeholder="YYYY-MM-DD">
            </div>
            <div class="form-group">
                <label class="font-weight-bold">Age: </label>
                <input type="text" name="age" class="form-control" placeholder="age">
            </div>
            <div class="form-group">
                <label class="font-weight-bold">Height: </label>
                <input type="text" name="height" class="form-control" placeholder="cms">
            </div>
            <div class="form-group">
                <label class="font-weight-bold">Weight: </label>
                <input type="text" name="weight" class="form-control" placeholder="weight in kgs">
            </div>
            <div class="form-group">
                <label class="font-weight-bold">Contact No: </label>
                <input type="text" name="contactno" class="form-control" placeholder="contact number">
            </div>
            <div class="form-group">
                <label class="font-weight-bold">House No: </label>
                <input type="text" name="houseno" class="form-control" placeholder="house number">
            </div>
            <div class="form-group">
                <label class="font-weight-bold">Street No: </label>
                <input type="text" name="streetno" class="form-control" placeholder="street number">
            </div>
            <div class="form-group">
                <label class="font-weight-bold">Sector: </label>
                <input type="text" name="sector" class="form-control" placeholder="sector">
            </div>
            <div class="form-group">
                <label class="font-weight-bold">City: </label>
                <input type="text" name="city" class="form-control" placeholder="city">
            </div>
            <div class="form-group">
                <input type="submit" name="next" class="btn btn-primary" value="Next">
            </div>
        </form>
    </div>
</body>

<?
	session_start();
	$emailReg = $_SESSION["_email"];
	$usernameReg = $_SESSION["_username"];
	$passwordReg = $_SESSION["_password"];
	
    $fname = $lname = $dob = $age = $height = $weight = $contactno = $houseno = $streetno = $sector = $city = NULL;
    if(isset($_POST["next"])){

        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $dob = $_POST["dob"];
        $age = $_POST["age"];
        $height = $_POST["height"];
        $weight  =$_POST["weight"];
        $contactno = $_POST["contactno"];
        $houseno = $_POST["houseno"];
        $streetno = $_POST["streetno"];
        $sector = $_POST["sector"];
        $city = $_POST["city"];
		
	    $db_sid = "(DESCRIPTION = (ADDRESS = (PROTOCOL = TCP)(HOST = DESKTOP-LN8EDCQ)(PORT = 1521)) (CONNECT_DATA = (SERVER = DEDICATED) (SERVICE_NAME = ejazz)))";            // Your oracle SID, can be found in tnsnames.ora  ((oraclebase)\app\Your_username\product\11.2.0\dbhome_1\NETWORK\ADMIN) 
  
		$db_user = "scott";   // Oracle username e.g "scott"
		$db_pass = "tiger";    // Oracle password e.g "1234"
		$con = oci_connect($db_user,$db_pass,$db_sid); 
		if($con) 
			{} 
		else 
			{ die('Could not connect to Oracle:'); }    
		}
		$queryMemberInsert = "INSERT INTO Members VALUES(seqMember.nextval, '".$fname."', '".$lname."', NULL, NULL, to_date('".$dob."', 'YYYY-MM-DD'), '".$houseno."', '".$streetno."', '".$sector."', '".$city."', ".$contactno.")";
		$queryID1 = oci_parse($con, $queryMemberInsert);
		$reply1 = oci_execute($queryID1);
		
		$queryExtraInsert = "INSERT INTO Information VALUES(seqMember.currval, ".$age.", ".$weight.", ".$height.")";
		
		$queryID2 = oci_parse($con, $queryExtraInsert);
		$reply2 = oci_execute($queryID2);
		
		$queryCredInsert = "INSERT INTO Credentials VALUES(seqMember.currval, '".$emailReg."', '".$passwordReg."', '".$usernameReg."')";
		
		$queryID3 = oci_parse($con, $queryCredInsert);
		$reply3 = oci_execute($queryID3);
		
		if ($reply1 && $reply2 && $reply3) {
			header('Location: FitMeLogin.php');
			exit;
		}

?>

</html>