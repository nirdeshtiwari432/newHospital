<?php 
$h_id = $_POST['h_id'];
$p_name = $_POST['p_name'];
$p_adhar = $_POST['p_adhar'];
$p_problem = $_POST['p_problem'];
$day = $_POST['day'];
$conn = new mysqli('localhost','root','','test1');
if($conn->connect_error){
    die('connection failed :'.$conn->connect_error);
}

else{
    $stmt = $conn->prepare("insert into (h_id,p_name,p_adhar,p_problem,day)
    values(?,?,?,?,?,?)");
    $stmt->bind_param("ssssss",$h_id,$p_name,$p_adhar,$p_problem,$day);
    $stmt->execute();
    $stmt->close();
    $conn->close();

}

?>
