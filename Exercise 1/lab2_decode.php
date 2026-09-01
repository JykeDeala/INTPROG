<?php

$json = '{"name":"Jyke Rafael A. Deala","age":20,"email":"itsmejykey@gmail.com"}';

$object = json_decode($json);

$array = json_decode($json, true);

echo "Object: " . $object->name;
echo "<br>";

echo "Array: " . $array["email"];

?>
