<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once dirname(__FILE__)."/dao/UserDao.class.php";
require_once dirname(__FILE__)."/dao/BandDao.class.php";

$dao = new BandDao();

$dao->add_band([
  "name" => "Regina",
  "price_per_hour" => "150KM"
]);

$bands = $dao->get_all_bands();

print_r($bands);


//$band1 = [

//"name" => "HMH band",
//"price_per_hour" => "100KM",
//"contact_email" => "hmh@gmail.com",
//"contact_phone" => "061123456",
//];

//$band = $dao->add_band($band1);
//print_r($band1);

//$user_dao = new UserDao();

//$user = $user_dao->get_user_by_user_id(3);

//$user1 = [

//"name" => "Hana",
//"surname" => "Kapo",
//"email" => "hanak@gmail.com",
//"phone_number" => "061025478",
//"username" => "HanaK",
//"password" => "kapo123"
//];


//$user = $user_dao->add_user($user1);


// $user_dao->get_user_by_email("mejakapo@gmail.com");


//print_r($user1);

 ?>
