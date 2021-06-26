<?php

require_once dirname (__FILE__).'/BaseService.class.php';
require_once dirname(__FILE__).'/../dao/UserDao.class.php';

class UserService extends BaseService{

  private $cityDao;

  public function __construct(){
    $this->dao = new UserDao();
    $this->cityDao = new CityDao();
  }

  public function register($user){
    if(!isset($user['account'])) throw new Exception("Account field is required");

    $city = this->cityDao->add([
      "name" = $user['account'],
      "surname" = "PENDING",
      "email" = "meejakapo@gmail.com"
    ]);

  }

  public function confirm($token){

  }
  }
?>
