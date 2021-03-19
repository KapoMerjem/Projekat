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
  $sql = "INSERT INTO users (name, surname, email, phone_number, username, password) VALUES (:name, :surname, :email, :phone_number, :username, :password)";
  $stmt = $this->connection->prepare($sql);
  $stmt->execute($user);
  $user['user_id'] = $this->connection->lastInsertId();
  return $user;
}

public function update_user($user_id, $user){
  $query = "UPDATE users SET ";
  foreach($user as $name => $value){
    $query .= $name ."= :". $name. ", " ;
  }
  $query = substr($query, 0, -2);
  $query .= "WHERE user_id = :user_id ";


  $stmt = $this->connection->prepare($query);
  $user['user_id'] = $user_id;
  $stmt->execute($user);
}
}

 ?>
