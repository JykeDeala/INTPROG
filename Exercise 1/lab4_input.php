<?php

$json = '{"username":"JykePogi","password":"12345678"}';

$data = json_decode($json, true);

echo "Username: " . $data["username"];
echo "<br>";
echo "Password: " . $data["password"];

?>
