<?php
require_once dirname(__FILE__)."/BaseDao.class.php";
class Restaurnat_catalogDao extends BaseDao{

  public function add_restaurant_catalog($restaurant_catalog){
   return $this->insert("restaurant_catalogs", $restaurant_catalog);

  }

  public function update_restaurant_catalog($id, $restaurant_catalog){
   $this->update("restaurant_catalogs", $id, $restaurant_catalog);
  }

  public function get_restaurant_catalog_by_id($id){
  return $this->query_unique("SELECT * FROM restaurant_catalogs WHERE id = :id", ["id" => $id]);
  }

  public function get_all_restaurant_catalogs(){
  return $this->query("SELECT * FROM restaurant_catalogs", []);

  }
  }


?>
