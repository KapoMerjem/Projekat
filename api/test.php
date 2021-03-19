<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once dirname(__FILE__)."/dao/UserDao.class.php";
$user_dao = new UserDao();

//$user = $user_dao->get_user_by_user_id(3);

$user1 = [
"name" => "Sabina",
"surname" => "Topić",
"email" => "sabiii@stu.ibu.edu.ba",
"phone_number" => "061275523",
"username" => "SabinaTopic",
"password" => "sabi12345"
];
$user = $user_dao->update_user(7, $user1);

// $user_dao->get_user_by_email("mejakapo@gmail.com");

print_r($user);

 ?>
