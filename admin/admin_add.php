<?php

include 'includes/conn.php'; 
$id = $_POST['id'];
$user = $_POST['user'];
$p = $_POST['pass'];
$pass = password_hash($p,PASSWORD_DEFAULT);

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$photo = $_POST['photo'];
$create_on = $_POST['create_on'];

//$date_create = date('YY/mm/dd', strtotime($create_on));

$sql = "INSERT INTO admin VALUES ('$id','$user','$pass','$fname','$lname','$photo','$create_on');";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully !";
 } else {
    echo "Error: " . $sql . "
" . mysqli_error($conn);
 }
 mysqli_close($conn);


?>