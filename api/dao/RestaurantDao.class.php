<?php
require_once dirname(__FILE__)."/BaseDao.class.php";

class RestaurantDao extends BaseDao{

  public function __construct(){
    parent::__construct("restaurants");
  }

  public function get_all_restaurants(){
    return $this->query("SELECT * FROM restaurants", []);
  }

}



?>
