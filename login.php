<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $Username = $_POST['username'];

    $Password = $_POST['password'];
    $host = "localhost";
    $dbusername = "root";
    $dbpassword ="";
    $dbname = "test1";
   $conn = new mysqli('localhost','root','','test1'); 
    if($conn->connect_error){
        die('connection failed :'.$conn->connect_error);
    }
    $query ="SELECT * FROM users WHERE username = '$Username' AND password ='$Password' ";
    $result = $conn->query($query);
    if($result->num_rows==1){
        header("Location:index2.php");
        exit();
        
    }else{
        header("Location:index.html");
        exit();
}
$conn->close();
} 
?>
