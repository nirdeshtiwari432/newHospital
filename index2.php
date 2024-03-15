<!DOCTYPE html>
<html lang="en">
<head>
<<link rel="stylesheet" type="" href="style.css">> 
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Home Page</title>
<script src= "main.js">
<script src = "db2.js"> </script>

</head>
<body >
<main>
<section class = "one">
    <div id = "div1">
    <h1>Welcome to Our Website</h1>
</div>
</section>
<section class="two">
    <div id = "link1">
<ul >
    <li><a href="index.html">Logout</a></li>
    <li><a href="registration.html">Registration</a></li>
    <li><a href="about.html">About</a></li> 
</ul>
</div>
<form id="hospitalForm" action = "">
    <label for="city" name = "city">Enter City Name:</label>
    <input type="text" id="city" name="city" required>
    <br>
    <input type="submit" value="Search">
</form>
<div id="hospitalList" style="">
    <h2>Hospitals in <span id="selectedCity"></span></h2>
    <ul id="hospitals"></ul>
</div>
 <form>
    
 </form>

    </div>   
</main>
</body>
</script>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Page</title>
<<link rel="stylesheet" type="" href="style.css">> 
</head>
<body id = "BODY">
<table> 
   <tr>
   <<th>Username</th>
    <th>Password</th>
</tr>

 <?php
    $h_id = $_POST['city'];
    $host = "localhost";
    $dbusername = "root";
    $dbpassword ="";
    $dbname = "test1";
   $conn = new mysqli('localhost','root','','test1'); 
    if($conn->connect_error){
        die('connection failed :'.$conn->connect_error);
    }
    $query ="SELECT *  FROM resistration_h Where city = $city ";
    $result = $conn->query($query);
    if($result->num_rows>0){
        while ($row = $result->fetch_assoc()) {
            
            echo "<tr><td>". $row["Username"] ."</td><td>" ."</td><td>". $row["Password"] ."</td></tr>";
        }
        echo "<?table>";
        exit(); 
    }else{
        header("Location:index2.html");
        exit();
}
$conn->close();

?>
</table>

     
    <a href="index.html">Back to Home</a>
</div>
<form action="p_detail.php" method="post">
        <label for="p_name">p_name:</label>
        <input type="text" id="p_name" name="p_name" required>
        <br>

        <label for="p_adhar">p_adhar:</label>
        <input type="text" id="p_adhar" name="p_adhar" required>
        <br>
        <label for="p_problem">p_problem:</label>
        <input type="text" id="p_problem" name="p_problem" required>
        <br>
        <label for="h_id">h_id:</label>
        <input type="text" id="h_id" name="h_id" required>
        <br>
        <label for="day">day:</label>
        <input type="text" id="day" name="day" required>
        <br>
        <input type="submit" value="Login" href ="index3.html">
    </form>

</body>
</html>


