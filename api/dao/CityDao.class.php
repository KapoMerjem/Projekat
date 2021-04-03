<?php
require_once dirname(__FILE__)."/BaseDao.class.php";
class CityDao extends BaseDao{

  public function add_city($city){
   return $this->insert("bands", $city);

  }

  public function update_city($id, $city){
   $this->update("cities", $id, $city);
}

  public function get_city_by_id($id){
  return $this->query_unique("SELECT * FROM cities WHERE id = :id", ["id" => $id]);
}

  public function get_all_cities(){
  return $this->query("SELECT * FROM cities", []);

  }
}


}

?>
