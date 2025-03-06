
<?php
 $servername='localhost';
 $username='root';
 $password='';
 $dbname = "web";


 
 // Create connection
 $conn = new mysqli($servername, $username, $password, $dbname);
 
 // Check connection
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }
 
 // Get the form data
 $name = $_POST['name'];
 $mobile = $_POST['mobile'];
 $quantity = $_POST['quantity'];
 $address = $_POST['address'];
 $productTitle = $_POST['productTitle'];
 $productPrice = $_POST['productPrice'];
 
 // Prepare and execute the SQL query to insert user and product data into the database
 $stmt = $conn->prepare("INSERT INTO porder(name, mobile, quantity, address, productTitle, productPrice) VALUES (?, ?, ?, ?, ?, ?)");
 $stmt->bind_param("ssissi", $name, $mobile, $quantity, $address, $productTitle, $productPrice);
 $stmt->execute();
 
 if ($stmt->affected_rows > 0) {
     echo "Order placed successfully!";
 } else {
     echo "Error placing order.";
 }
 
 // Close the statement and the connection
 $stmt->close();
 $conn->close();
 ?>
 