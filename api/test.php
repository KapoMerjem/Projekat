<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once dirname(__FILE__)."/dao/UserDao.class.php";
require_once dirname(__FILE__)."/dao/CityDao.class.php";
require_once dirname(__FILE__)."/dao/PhotographerDao.class.php";
require_once dirname(__FILE__)."/dao/RestaurantDao.class.php";
require_once dirname(__FILE__)."/dao/ReservationDao.class.php";

$user_dao = new UserDao();

//$user1 = [
//  "name" => "Merjem Kapo",
//  "email" => "merjem.k@gmail.com",
//  "password" => "12345",
//];

//$user = $user_dao->add_user($user1);
//$user = $user_dao->update_user_by_email("meja@stu.ibu.edu.ba", $user1);

//print_r($user);

$user1 = [
"name" => "Merjem",
"surname" => "Kapo",
"email" => "mk@gmail.com",
"password" => "mk12345"
];

$user = $user_dao->add($user1);
print_r($user);


//$dao = new BandDao();

//$bands = $dao->get_all();
//print_r($bands);
//echo json_encode($users, JSON_PRETTY_PRINT);

//for($i = 0; $i < 5000; $i++){
  //$dao->add([
    //"name" => base64_encode(random_bytes(10)),
    //"price_per_hour" => "180KM"
  //]);
//}
//$dao = new CateringDao();

//$catering = [
  //"name" => "Food SA",
  //"sweet" => "1",
  //"salty" => "1",
  //"cakes" => "1",
  //"drinks" => "1",
  //"cookies" => "0",
  //"meat" => "0",
  //"chicken" => "1",
  //"fish" => "1"
//];



//$catering = $dao->get_all_caterings(); //$dao->add($catering);
//print_r($catering);


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



 ?>
