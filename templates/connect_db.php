<?php
$con = mysqli_connect('127.0.0.1', 'root', 'root', 'blog');
 
if (!$con) {
    echo "Sorry <br>";
    echo mysqli_connect_error();
    exit();
}
 
$result = mysqli_query($con, "SELECT * FROM `posts`");

while($prod = mysqli_fetch_assoc($result)) {
	$posts[] = $prod;
}

?>