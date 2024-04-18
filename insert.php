<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "electro";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$name=$_POST['fname'];
$password=$_POST['password'];

$sql = "INSERT INTO users (name, password)
VALUES ('$name','$password')";

if (mysqli_query($conn, $sql)) {
  if($name!="" AND $password!=""){
     print "New record created successfully";
   $file = 'HomePage.html'; 
  $content = file_get_contents($file);
echo $content; 
  }
}
else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>