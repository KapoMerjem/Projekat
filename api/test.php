<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once dirname(__FILE__)."/dao/UserDao.class.php";
$user_dao = new UserDao();

//$user = $user_dao->get_user_by_user_id(3);

$user1 = [

"password" => "pass123"
"name" => "Sabina Bektic"
];


$user = $user_dao->update_user_by_email("sabiii@stu.ibu.edu.ba", $user1);

// $user_dao->get_user_by_email("mejakapo@gmail.com");

print_r($user);

 ?>
