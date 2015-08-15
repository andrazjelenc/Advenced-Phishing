<?php
//legit login page
$username = $_POST['username'];
$password = $_POST['password'];

$hash = hash('sha256',$password);

echo "<h1>Legit page!</h1> <br /><br />";
echo "Your name is <u><b>$username</b></u> ,and your password is <u><b>$hash</b></u>.";
?>
