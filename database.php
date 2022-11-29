<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = 'webpr1';
/////   CREATE DATABASE     /////
$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}
      
$sql = "CREATE DATABASE webpr1";
if ($conn->query($sql) === TRUE) {
    echo "Database has been created successfully <br>";
} else {
    echo "Error creating database: " . $conn->error;
}
$conn->close();
    /////   CREATE TABLE USERS IN DB     /////g
    /////   CREATE TABLE PRODUCTS IN DB     /////
         $conn = new mysqli($servername, $username, $password, $dbname);
         if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
         }
  
         $sql = "CREATE TABLE products (
             product_id INT(6) AUTO_INCREMENT PRIMARY KEY,
             product_name VARCHAR(15) NOT NULL
         )";
  
         if ($conn->query($sql) === TRUE) {
             echo "Create table successfully!<br>";
         }
$conn->close();
 $conn = new mysqli($servername, $username, $password, $dbname);
 if ($conn->connect_error){
       die("Connection failed: " . $conn->connect_error);
 }
 $sql = "INSERT INTO products (product_name) VALUES ('hot americano'),('iced americano')";  

 if (($conn->query($sql) === TRUE)) {
       echo "Data has been inserted successfully!";
 }else{
       echo "Error: " . $sql . "<br>" . $conn->error;
 }
$conn->close();


?>