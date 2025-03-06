<?php 

    $host="localhost";
    $dbuser="root";
    $password="";
    $dbname="web";


    $con= mysqli_connect($host,$dbuser,$password,$dbname,);

   
    $username = $_POST['username'];  
    $password = $_POST['password'];

    $username = stripcslashes($username);  
    $password = stripcslashes($password);  
    $username = mysqli_real_escape_string($con, $username);  
    $password = mysqli_real_escape_string($con, $password);  

    $sql = "select *from login where username = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  



        if($count == 1){  
            include 'contact/admin_contact.php';
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>
            
            
            
            
            
            ";  
        }     


?>