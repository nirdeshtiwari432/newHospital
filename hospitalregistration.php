<?php 
$h_id = $_POST['username'];
$Email = $_POST['email'];
$Password = $_POST['password'];
$city = $_POST['city'];
$conn = new mysqli('localhost','root','','test1');
if($conn->connect_error){
    die('connection failed :'.$conn->connect_error);
}

else{
    $stmt = $conn->prepare("insert into resistration_h(h_id,city,email,Password)
    values(?,?,?,?)");
    $stmt->bind_param("ssss",$h_id,$city,$email,$Password);
    $stmt->execute();
    $stmt->close();
    $conn->close();

}

?>
