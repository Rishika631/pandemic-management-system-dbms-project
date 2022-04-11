<?php
$server="localhost";
$username="root";
$password="Saudamini@17";
$dbname="project";
$conn = mysqli_connect($server,$username,$password,$dbname); if(isset($_POST['submit']))
{
if(!empty($_POST['name']) && !empty($_POST['state']) && !empty($_POST['aadhar']))
{
$name=$_POST['name'];
$state=$_POST['state'];
$aadhar=$_POST['aadhar'];

$query="insert into login(Name,State,AadharNo) values('$name','$state',$aadhar)";
$run = mysqli_query($conn,$query) or die(mysqli_error()); if($run)
{
echo "Registered Successfully";
}
else
{
echo "Not Submitted";
}
}
else
{
echo "All fields required";
}
}
?>

<!doctype html>

<html lang="en" >
 
 
<head>


<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body style="background-color:#d9f3ff;font-size:25px;margin-top:50px;margin-left:600px;font- color:green" >
<br><br>
<a href="page-1.html">Visit Home Page</a>
</body>
