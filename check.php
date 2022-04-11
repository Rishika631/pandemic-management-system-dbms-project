<?php
$servername = "localhost";
$username = "root";
$password = "Saudamini@17";
$dbname = "project";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($con->connect_error) {
die("Connection failed: " . $con->connect_error);
}
// Get all the categories from category table
$sql1 = "SELECT * FROM slot";
$all_hname = mysqli_query($con,$sql1);


$sql2 = "SELECT * FROM vaccine";
$all_vname = mysqli_query($con,$sql2);



//$todo=$_POST['todo'];

//if(isset($todo) and $todo=="submit"){
//$month=$_POST['month'];

//$dt=$_POST['dt'];

//$year=$_POST['year'];

//$date_value="$month/$dt/$year";

//echo "mm/dd/yyyy format :$date_value<br>";

//$date_value=new DateTime("2021-10-10");

//echo "YYYY-mm-dd format :$date_value<br>";

//}





// The following code checks if the submit button is clicked
// and inserts the data in the database accordingly if(isset($_POST['submit']))
{
    // Store the Product name in a "name" variable
    $name =$_POST['Name'];
    
    
    $aadhar =$_POST['AadharNo'];
    
    $bid = $_POST['B_ID'];
    
    $hid =$_POST['H_ID'];
    
    $vid = $_POST['V_ID'];
    
    // Store the Category ID in a "id" variable
    $hname = $_POST['HName'];
    
    $vname =$_POST['VName'];
    
    
    
    
    
    
    
    
    // Creating an insert query using SQL syntax and
     
    // storing it in a variable.
    $sql_insert =
    "INSERT INTO Booking (Name,AadharNo,B_ID,HName,H_ID,VName,V_ID,Date)
    VALUES ('$name',$aadhar,$bid,'$hname',$hid,'$vname',$vid,'$date_value')";
    
     
    
    
    
    
    
    
    
    
    
    
    else {
     
    // The following code attempts to execute the SQL query
    // if the query executes with no errors
    // a javascript alert message is displayed
    // which says the data is inserted successfully if(mysqli_query($con,$sql_insert))
    {
    echo '<script>alert("Record added successfully")</script>';
    }
     
    echo "Error: " . $sql_insert . "<br>" . mysqli_error($con);
    }
    }
    
    if(isset($_POST['submit']))
    { echo '<script>alert("Record added successfully")</script>';
    }
    $con->close();
    ?>
    
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
    content="width=device-width, initial-scale=1.0">
    </head>
    
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    
    
    
    
    
    <body style="background-color:#d9f3ff; margin-left:600px; margin-top:100px">
    <p style="color:#006a9c; font-size:40px">BOOKING FORM</p><br><br>
    <form action="check.php" method="POST">
    <label>Name:</label>
    <input type="text" name="Name" required><br> <br>
    
    <label>Aadhar Number:</label>
     
    <input type="int" name="AadharNo" required><br> <br>
    
    <label>Booking ID:</label>
    <input type="int" name="B_ID" required><br> <br>
    
    
    <label>Hospital</label>
    
    <select name="HName">
    <?php
    // use a while loop to fetch data
    // from the $all_categories variable
    // and individually display as an option while ($hname = mysqli_fetch_array(
    $all_hname,MYSQLI_ASSOC)):;
    ?>
    <option value="<?php echo $hname["HName"];
    // The value we usually set is the primary key
    ?>">
    <?php echo $hname["HName"];
    // To show the category name to the user
    ?>
    </option>
    <?php
    endwhile;
    // While loop must be terminated
    ?>
    </select>
    
    <br><br>
    
    <label>Hospital ID:</label>
    <input type="int" name="H_ID" required><br> <br>
    
    
    <label>Vaccine</label>
    
    <select name="VName">
    <?php
    // use a while loop to fetch data
    // from the $all_categories variable
    // and individually display as an option while ($vname = mysqli_fetch_array(
    $all_vname,MYSQLI_ASSOC)):;
    ?>
    <option value="<?php echo $vname["VName"];
    // The value we usually set is the primary key
     
    ?>">
    <?php echo $vname["VName"];
    // To show the category name to the user
    ?>
    </option>
    <?php
    endwhile;
    // While loop must be terminated
    ?>
    </select>
    
    <br><br>
    <label>Vaccine ID:</label>
    <input type="int" name="V_ID" required><br> <br>
    
    
    
    
    
    
    
    
    
    
    
    <form method=post name=f1 action=''><input type=hidden name=todo value=submit>
    
    <table border="0" cellspacing="0" >
    <tr><td align=left >
    Year(yyyy)<input type=text name=year size=4 value=2021>
    </td>
    <td align=left >
    
    <select name=month value=''>Select Month</option>
    <option value='01'>January</option>
    <option value='02'>February</option>
    <option value='03'>March</option>
    <option value='04'>April</option>
    <option value='05'>May</option>
    <option value='06'>June</option>
    <option value='07'>July</option>
    <option value='08'>August</option>
    <option value='09'>September</option>
    <option value='10'>October</option>
    <option value='11'>November</option>
    <option value='12'>December</option>
    </select>
     
    </td><td align=left > Date<select name=dt >
    <option value='01'>01</option>
    <option value='02'>02</option>
    <option value='03'>03</option>
    <option value='04'>04</option>
    <option value='05'>05</option>
    <option value='06'>06</option>
    <option value='07'>07</option>
    <option value='08'>08</option>
    <option value='09'>09</option>
    <option value='10'>10</option>
    <option value='11'>11</option>
    <option value='12'>12</option>
    <option value='13'>13</option>
    <option value='14'>14</option>
    <option value='15'>15</option>
    <option value='16'>16</option>
    <option value='17'>17</option>
    <option value='18'>18</option>
    <option value='19'>19</option>
    <option value='20'>20</option>
    <option value='21'>21</option>
    <option value='22'>22</option>
    <option value='23'>23</option>
    <option value='24'>24</option>
    <option value='25'>25</option>
    <option value='26'>26</option>
    <option value='27'>27</option>
    <option value='28'>28</option>
    <option value='29'>29</option>
    <option value='30'>30</option>
    <option value='31'>31</option>
    </select>
    
    
    </td>
    
    </table>
    </form>
    
    <br> <br>
    <!-- <input type="submit" value="Submit" name="submit"> -->
    <button type="button">Submit</button>

<script>
var pressedButton = document.getElementsByTagName("button")[0]; pressedButton.addEventListener("click", function (event) {
alert("Recorded Added Successfully")
})
</script>
</form>
<br>
</body>
</html>
    