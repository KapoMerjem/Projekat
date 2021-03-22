<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once dirname(__FILE__)."/dao/UserDao.class.php";
$user_dao = new UserDao();

//$user = $user_dao->get_user_by_user_id(3);

$user1 = [

"name" => "Hana",
"surname" => "Kapo",
"email" => "hanak@gmail.com",
"phone_number" => "061025478",
"username" => "HanaK",
"password" => "kapo123"
];


$user = $user_dao->add_user($user1);


// $user_dao->get_user_by_email("mejakapo@gmail.com");


print_r($user1);

 ?>
