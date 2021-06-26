<?php

require_once dirname (__FILE__).'/BaseService.class.php';
require_once dirname(__FILE__).'/../dao/UserDao.class.php';
require_once dirname(__FILE__).'/../dao/CityDao.class.php';


class UserService extends BaseService{

  private $cityDao;

  public function __construct(){
    $this->dao = new UserDao();
    $this->cityDao = new CityDao();
  }

  public function register($user){
    if(!isset($user['account'])) throw new Exception("Account field is required");

    try{
      //open transaction here
          $city = this->cityDao->add([
            "name" => $user['account'],
            "postal_co" => "71 000"
          ]);

      $user = parent::add([
        "id_city" => $city['id'],
        "name" => $user['name'],
        "email" => $user['email'],
        "password" => $user['password'],
        "token" => md5(random_bytes(16))
      ]);

      //commit here
    } catch(\Exception $e){
      //rollback
      throw $e;
    }


// TODO: send email with some token

return $user;
}

  public function confirm($token){
    $user = $thid->dao->get_user_by_token($token);

    if(!isset($user['id'])) throw Exception("Invalid token");

    $this->dao->update($user['id'], ["status" => "ACTIVE"]);
    $this->cityDao->update($user['id_city'], ["status" => "ACTIVE"]);
  }
  }
?>
