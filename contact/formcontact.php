
<?php 
    $host="localhost";
    $dbuser="root";
    $password="";
    $dbname="web";


    $conn= mysqli_connect($host,$dbuser,$password,$dbname,);




$name=$_REQUEST["name"];
$email=$_REQUEST["email"];
$number=$_REQUEST["number"];
$freetime=$_REQUEST["freetime"];
$problem=$_REQUEST["problem"];

$insertQuery= "INSERT INTO contact(name,email,mobile,freetime,problem) VALUES('$name','$email','$number','$freetime','$problem')";
$runQuery = mysqli_query($conn,$insertQuery);

include 'contact.html';

?>
