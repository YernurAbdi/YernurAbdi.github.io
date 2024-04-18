<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "electro";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$name = $_POST['fname'];
$password = $_POST['password'];

$stmt = mysqli_prepare($conn, "SELECT * FROM users WHERE name = ? AND password = ?");
mysqli_stmt_bind_param($stmt, "ss", $name, $password);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);

if (mysqli_num_rows($result) > 0) {
  echo "Welcome back";
  $file = 'HomePage1.html';
  $content = file_get_contents($file);
  echo $content;
} else {
    echo "Error: Invalid username or password";
}
mysqli_stmt_close($stmt);
mysqli_close($conn);
?>