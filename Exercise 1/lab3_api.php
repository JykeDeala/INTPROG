<?php

header('Content-Type: application/json');

$user = array(
    "id" => 1,
    "name" => "Jyke Rafael A. Deala",
    "email" => "itsmejykey@gmail.com",
    "status" => "active"
);

echo json_encode($user);

?>
