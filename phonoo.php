<?php
$Firstname=$_REQUEST['firstname'];
$Email=$_REQUEST['email'];
$Password=$_REQUEST['pass'];
$Date=$_REQUEST['bday'];
$Gender=$_REQUEST['Male or Female'];
$City=$_REQUEST['select'];


if(isset($_POST['sub']))

$host = "localhost"; 
$user = "root";
$password =""; 
$db = "form"; 
@$conn= mysqli_connect($host,$user,$password,$db);
$insert= "insert into studentsbis values('$firstname','$Email','$Password','$Date','$Gender','$City')";
mysqli_query($conn,$insert);
if($conn){

    echo("<h1 style=color:green;> Your Registartion is Done!</h1>");
    

}
else{
    echo("<h1 style=color:red;> Your Registartion is Failed❌</h1>");
}




?>




