<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once dirname(__FILE__)."/dao/UserDao.class.php";
require_once dirname(__FILE__)."/dao/CityDao.class.php";
require_once dirname(__FILE__)."/dao/PhotographerDao.class.php";
require_once dirname(__FILE__)."/dao/RestaurantDao.class.php";
require_once dirname(__FILE__)."/dao/ReservationDao.class.php";

$dao = new CityDao();

print_r($_GET);
die;
$cities = $dao->get_all($_GET['iffset'], $_GET['limit']);
//print_r($cities);
echo json_encode($cities, JSON_PRETTY_PRINT);

// $dao = new CityDao();
//
// for ($i = 0; $i < 1000; $i++){
//   $dao->add([
//     "name" => base64_encode(random_bytes(10))
//   ]);
// }


// $user_dao = new UserDao();
//$city_dao = new CityDao();
//$photographer_dao = new PhotographerDao();
//$reservation_dao = new ReservationDao();
//$restaurant_dao = new RestaurantDao();


// $user1 = [
// "name" => "Merjem",
// "surname" => "Kapo",
// "email" => "mk@gmail.com",
// "password" => "mk12345"
// ];
//
// $user = $user_dao->add($user1);
// print_r($user);
//
// $user2 = [
// "name" => "Hana",
// "surname" => "Kapo",
// "email" => "hk@gmail.com",
// "password" => "hk123"
// ];
//
// $user = $user_dao->add($user2);
// print_r($user);

//  $user3 = [
//  "name" => "Sanela",
//  "surname" => "Imamovic",
//  "email" => "sana@gmail.com",
//  "password" => "sana123"
//  ];
//
// $user = $user_dao->add($user3);
// print_r($user);

// $city1 = [
// "name" => "Sarajevo",
// "postal_co" => "71 000"
// ];
//
// $city = $city_dao->add($city1);
// print_r($city);
//
// $city2 = [
// "name" => "Zenica",
// "postal_co" => "72 000"
// ];
//
// $city = $city_dao->add($city2);
// print_r($city);

// $city3 = [
// "name" => "Mostar",
// "postal_co" => "88 000"
// ];
//
// $city = $city_dao->add($city3);
// print_r($city);

// $photographer1 = [
// "name" => "John",
// "surname" => "Doe",
// "email" => "johnd@gmail.com",
// "status" => "ACTIVE"
// ];
//
// $photographer = $photographer_dao->add($photographer1);
// print_r($photographer);

// $photographer2 = [
// "name" => "Jena",
// "surname" => "Doe",
// "email" => "jena@gmail.com",
// "status" => "NOT ACTIVE"
// ];
//
// $photographer = $photographer_dao->add($photographer2);
// print_r($photographer);
// $dao = new PhotographerDao();
//
// $photographer = [
// "name" => "John",
// "surname" => "Doe",
// "email" => "johnd@gmail.com",
// "status" => "ACTIVE"
// ];
// $dao->update(1, [
//   "price" => "350 KM"
// ]);
// $photographer = $dao->get_all_photographers();
// print_r($photographer);

// $reservation1 = [
// "duration" => "4h",
// "time" => "14:00",
// "date" => "23.6.2021.",
// "id_user" => "1",
// "id_photographer" => "1"
// ];
//
// $reservation = $reservation_dao->add($reservation1);
// print_r($reservation);

// $reservation2 = [
// "duration" => "3h",
// "time" => "16:00",
// "date" => "13.8.2021.",
// "id_user" => "2",
// "id_photographer" => "2"
// ];
//
// $reservation = $reservation_dao->add($reservation2);
// print_r($reservation);

// $restaurant1 = [
// "name" => "Hotel Hills",
// "capacity" => "300",
// "bend" => "Dino Merlin band",
// "status" => "ACTIVE",
// "id_city" => "1"
// ];
//
// $restaurant = $restaurant_dao->add($restaurant1);
// print_r($restaurant);

// $restaurant2 = [
// "name" => "Izvor",
// "capacity" => "150",
// "bend" => "HMH band",
// "status" => "ACTIVE",
// "id_city" => "2"
// ];
//
// $restaurant = $restaurant_dao->add($restaurant2);
// print_r($restaurant);

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
