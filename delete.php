<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'itfwinter.mysql.database.azure.com', 'mnx032@itfwinter', 'Ppink@09', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL PLEASE TRY AGAIN: '.mysqli_connect_error());
}


$name = $_POST['name'];
$comment = $_POST['comment'];


$sql = $sql = "DELETE FROM guestbook1 WHERE name='$name'";
$sql = "DELETE FROM guestbook1 WHERE Comment='$comment'";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully!";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>
