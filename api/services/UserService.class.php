<?php

require_once dirname (__FILE__).'/BaseService.class.php';
require_once dirname(__FILE__).'/../dao/UserDao.class.php';
require_once dirname(__FILE__).'/../dao/BandDao.class.php';

class UserService extends BaseService{

  private $bandDao;

  public function __construct(){
    $this->dao = new UserDao();
    $this->bandDao = new BandDao();
  }

  public function register($user){
    if(!isset($user['account'])) throw new Exception("Account field is required");

    $band = this->bandDao->add([
      "name" = $user['account'],
      "surname" = "PENDING",
      "price_per_hour" = "115KM"
    ]);

  }

  public function confirm($token){

  }
  }
?>
