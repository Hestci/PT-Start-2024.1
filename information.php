<?php
$conn = mysqli_connect('db', 'root', 'kali');
if (!$conn) {
	die('Error' . mysqli_error());
}
echo 'Good!';
mysqli_close($conn);
 ?>
