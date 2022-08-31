<?php

include './connect.php';
$table = "users";
// $name = filterRequest("namerequest");
$data = array(
    "users_name" => "obada",
    "users_email" => "obada@gmail.com",
    "users_phone" => "324234",
    "users_verfycode" => "123456",
);
$count = insertData($table, $data);