<?php
require_once dirname(__FILE__)."/BaseDao.class.php";

class UserDao extends BaseDao{

  public function get_user_by_email($email){

    return $this->query_unique("SELECT * FROM users WHERE email = :email", ["email" => $email]);
}

public function get_user_by_user_id($user_id){
  return $this->query_unique("SELECT * FROM users WHERE user_id = :user_id", ["user_id" => $user_id]);
}

public function add_user($user){
  return $this->insert("users", $user);
}

public function update_user($user_id, $user){
  $this->update("users", $user_id, $user);
  }

  public function update_user_by_email($email, $user){
    $this->update("users", $email, $user, "email");
    }
}
?>
