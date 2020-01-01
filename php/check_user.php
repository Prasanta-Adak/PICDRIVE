<?php
require('database.php');
$username=base64_decode($_POST['username']);
$change="SELECT username FROM users WHERE username='$username'";
$responsc=$db->query($change);
if($responsc->num_rows==0)
{
    echo "user not exist";
}
else{
    echo"user already exist";
}
?>