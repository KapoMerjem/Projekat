<?php

require_once dirname (__FILE__).'/BaseService.class.php';
require_once dirname(__FILE__).'/../dao/UserDao.class.php';
require_once dirname(__FILE__).'/../dao/CityDao.class.php';

use \Firebase\JWT\JWT;

class UserService extends BaseService{

  private $cityDao;
  protected $dao;

  public function __construct(){

    $this->dao = new UserDao();
    $this->cityDao = new CityDao();
  }

public function reset($user){
  $db_user = $this->dao->get_user_by_token($user['token']);
  if(!isset($db_user['id'])) throw new Ecxeption("Invalid token", 400);
  $this->dao->update($db_user['id'], ['password' => md5($user['password']), 'token' => NULL]);
}

public function forgot($user){
  $this->dao->get_user_by_email($user['email']);

  if (!isset($db_user['id'])) throw new Exception("User doesn't exist", 400);

$db_user = $this->update($db_user['id'], ['token' => md5(random_bytes(16))]);
  //generate token - and save it to db

}
public function login($user){
  $this->dao->get_user_by_email($user['email']);

  if (!isset($db_user['id'])) throw new Exception("User doesn't exist", 400);
  if ($db_user['password'] != md5($user['password'])) throw new Exception("Invalid password", 4000);

$jwt = JWT::encode(["id" => $d["id"], "aid" => $db_user["id_city"], "r" => $db_user["role"]], "JWT SECRET");

  return ["token" => $jwt] ;

}

  public function register($user){
    if(!isset($user['account'])) throw new Exception("Account field is required");

    try{
      $this->dao->beginTransaction();
          $city = this->cityDao->add([
            "name" => $user['account'],
            "postal_co" => "71 000"
          ]);

      $user = parent::add([
        "id_city" => $city['id'],
        "name" => $user['name'],
        "email" => $user['email'],
        "password" => md5($user['password']),
        "token" => md5(random_bytes(16))
      ]);
      $this->dao->commit();
    } catch(\Exception $e){
      $this->dao->rollBack();
      if(str_contains($e->getMessage(), 'users.uq_user_email')){
        throw new Exception("Account with same email exist in the database", 400, $e);
      }else{
        throw $e;
      }
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
