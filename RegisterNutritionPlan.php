<!DOCTYPE html>
<html>
<head>
    <title>Nutrition Plan</title>
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
        <h2> Register Nutrition Plan:</h2><br><br>
    </div>
    <br>
    <div class="text-center">
        <h3>Nutrition Chart:</h3><br><br>
    </div>

    <div class="container">       
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Target Weight</th>
                    <th>Target Calories</th>
                    <th>Target Carbohydrates</th>
                    <th>Target Protiens</th>
                    <th>Target Fats</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>60</td>
                    <td>2100</td>
                    <td>230</td>
                    <td>51</td>
                    <td>45</td>
                </tr>
                <tr>
                    <td>65</td>
                    <td>2150</td>
                    <td>250</td>
                    <td>52</td>
                    <td>50</td>
                </tr>
                <tr>
                    <td>70</td>
                    <td>2200</td>
                    <td>270</td>
                    <td>53</td>
                    <td>55</td>
                </tr>
                <tr>
                    <td>75</td>
                    <td>2250</td>
                    <td>290</td>
                    <td>54</td>
                    <td>60</td>
                </tr>
                <tr>
                    <td>80</td>
                    <td>2300</td>
                    <td>310</td>
                    <td>55</td>
                    <td>65</td>
                </tr>
                <tr>
                    <td>85</td>
                    <td>2350</td>
                    <td>330</td>
                    <td>56</td>
                    <td>70</td>
                </tr>
            </tbody>
        </table>
    </div>
    <br>

    <br>
    <div class="text-center">
        <h3> Nutrition Plan:</h3><br><br>
    </div>

    <div class="container">       
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Plan ID</th>
                    <th>Target Weight</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>80</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>75</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>65</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>60</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>65</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>70</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>85</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>70</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>75</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>75</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>80</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="wrapper">
    <form action="FitMeLogin.php" method="post">
        <h4>
            <label for="nplans">Choose a Plan ID:</label>
            <select name="nplans" id="plans">
                <option name="nplan1" value="plan1">Plan-01</option>
                <option name="nplan2" value="plan2">Plan-02</option>
                <option name="nplan3" value="plan3">Plan-03</option>
                <option name="nplan4" value="plan4">Plan-04</option>
                <option name="nplan5" value="plan5">Plan-05</option>
                <option name="nplan6" value="plan6">Plan-06</option>
                <option name="ncustomplan" value="custom">Custom</option>
            </select>
        <br>
        </h4>

        <h4>
            <label for="nweight">Choose a Target Weight:</label>
            <select name="nweight" id="nweight">
                <option name="nweight1" value="plan1">60</option>
                <option name="nweight2" value="plan2">65</option>
                <option name="nweight3" value="plan3">70</option>
                <option name="nweight4" value="plan4">75</option>
                <option name="nweight5" value="plan5">80</option>
                <option name="nweight6" value="plan6">85</option>
                <option name="ncustomweight" value="custom">Custom</option>
            </select>
        <br>
        </h4>
        <div class="form-group">
            <input type="submit" name="save" class="btn btn-primary" value="Save">
        </div>
    </form>
    </div>

</body>

<? 

?>

</html>