<?php
$email = "zeyad.yhia95@gmail.com";
$pass = sha1(12345);
$folder = "user_1";
$conn = mysqli_connect("localhost","root","","almadina_backup");
$query = "SELECT * FROM users WHERE email = ".$email." AND folder_name = 'user_1' AND pass = sha1(12345)";
$res = mysqli_query($conn,$query);
$user = mysqli_fetch_all($res,MYSQLI_ASSOC);
echo '<pre>';
print_r($user);
echo '</pre>';