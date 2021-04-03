<?php
require_once dirname(__FILE__)."/BaseDao.class.php";
class RestaurantDao extends BaseDao{

  public function add_restaurant($restaurant){
    return $this->insert("restaurants", $restaurant);

  }

  public function update_restaurant($id, $restaurant){
   $this->update("restaurants", $id, $restaurant);
  }

  public function get_restaurant_by_id($id){
    return $this->query_unique("SELECT * FROM restaurants WHERE id = :id", ["id" => $id]);
  }

  public function get_all_restaurants(){
    return $this->query("SELECT * FROM restaurants", []);

  }
  }



?>
