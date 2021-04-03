<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once dirname(__FILE__)."/dao/UserDao.class.php";
require_once dirname(__FILE__)."/dao/BandDao.class.php";
require_once dirname(__FILE__)."/dao/CateringDao.class.php";
require_once dirname(__FILE__)."/dao/CityDao.class.php";
require_once dirname(__FILE__)."/dao/DecorDao.class.php";
require_once dirname(__FILE__)."/dao/Flower_catalogDao.class.php";
require_once dirname(__FILE__)."/dao/Flower_shopDao.class.php";
require_once dirname(__FILE__)."/dao/photographerDao.class.php";
require_once dirname(__FILE__)."/dao/RestaurantDao.class.php";
require_once dirname(__FILE__)."/dao/Restaurant_catalogDao.class.php";
require_once dirname(__FILE__)."/dao/SingerDao.class.php";

$dao = new CateringDao();

$catering = [
  "name" => "Food SA",
  "sweet" => "1",
  "salty" => "1",
  "cakes" => "1",
  "drinks" => "1",
  "cookies" => "0",
  "meat" => "0",
  "chicken" => "1",
  "fish" => "1"
];

$catering = $dao->add($catering);
print_r($catering);

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


//print_r($user1);

 ?>
