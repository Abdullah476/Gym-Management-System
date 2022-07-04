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

		<?php  // creating a database connection 
			session_start();
			
			$unameInfo = $_SESSION["uname"];
			$passInfo = $_SESSION["pass"];

			$db_sid = "(DESCRIPTION = (ADDRESS = (PROTOCOL = TCP)(HOST = DESKTOP-LN8EDCQ)(PORT = 1521)) (CONNECT_DATA = (SERVER = DEDICATED) (SERVICE_NAME = ejazz)))";            // Your oracle SID, can be found in tnsnames.ora  ((oraclebase)\app\Your_username\product\11.2.0\dbhome_1\NETWORK\ADMIN) 
		  
			$db_user = "scott";   // Oracle username e.g "scott"
			$db_pass = "tiger";    // Oracle password e.g "1234"
			$con = oci_connect($db_user,$db_pass,$db_sid); 
			if($con) {} 
			else { die('Could not connect to Oracle:'); } 
			
			$queryMemberID = oci_parse($con, "select * from credentials where username = '".$unameInfo."' and password = '".$passInfo."'");
			oci_execute($queryMemberID);
			
			$memberID = oci_fetch_array($queryMemberID);
			
			$queryMember = oci_parse($con, "select * from members where member_id = ".$memberID["MEMBER_ID"]);
			oci_execute($queryMember);
			
			$memberInfo = oci_fetch_array($queryMember);
			
			$queryInfo = oci_parse($con, "select * from information where member_id = ".$memberID["MEMBER_ID"]);
			oci_execute($queryInfo);
			
			$extraInfo = oci_fetch_array($queryInfo);

		?>
		
		<div class="wrapper">
        <h2>Personal Information:</h2>

        <form action="" method="post">
            <div class="form-group">
                <label  class="font-weight-bold">First Name: </label>
                <input type="text" name="fname" value="<?echo $memberInfo["FIRST_NAME"];?>" class="form-control" placeholder="first name">
            </div>    
            <div class="form-group">
                <label class="font-weight-bold">Last Name: </label>
                <input type="text" name="lname" value="<?echo $memberInfo["LAST_NAME"];?>"class="form-control" placeholder="last name">
            </div>
            <div class="form-group">
                <label class="font-weight-bold">Date of Birth: </label>
                <input type="text" name="dob" value="<?echo $memberInfo["DOB"];?>" class="form-control" placeholder="YYYY-MM-DD">
            </div>
            <div class="form-group">
                <label class="font-weight-bold">Age: </label>
                <input type="text" name="age" value="<?echo $extraInfo["AGE"];?>" class="form-control" placeholder="age">
            </div>
            <div class="form-group">
                <label class="font-weight-bold">Height: </label>
                <input type="text" name="height" value="<?echo $extraInfo["HEIGHT"];?>" class="form-control" placeholder="feet,inches">
            </div>
            <div class="form-group">
                <label class="font-weight-bold">Weight: </label>
                <input type="text" name="weight" value="<?echo $extraInfo["WEIGHT"];?>" class="form-control" placeholder="weight in kgs">
            </div>
            <div class="form-group">
                <label class="font-weight-bold">Contact No: </label>
                <input type="text" name="contactno" value="<?echo $memberInfo["CONTACT_NO"];?>" class="form-control" placeholder="contact number">
            </div>
            <div class="form-group">
                <label class="font-weight-bold">House No: </label>
                <input type="text" name="houseno" value="<?echo $memberInfo["HOUSE_NO"];?>" class="form-control" placeholder="house number">
            </div>
            <div class="form-group">
                <label class="font-weight-bold">Street No: </label>
                <input type="text" name="streetno" value="<?echo $memberInfo["STREET_NO"];?>" class="form-control" placeholder="street number">
            </div>
            <div class="form-group">
                <label class="font-weight-bold">Sector: </label>
                <input type="text" name="sector" value="<?echo $memberInfo["AREA"];?>" class="form-control" placeholder="sector">
            </div>
            <div class="form-group">
                <label class="font-weight-bold">City: </label>
                <input type="text" name="city" value="<?echo $memberInfo["CITY"];?>" class="form-control" placeholder="city">
            </div>
        </form>
    </div>

	</body>
</html>
