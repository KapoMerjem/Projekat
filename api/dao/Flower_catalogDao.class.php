<?php
require_once dirname(__FILE__)."/BaseDao.class.php";
class Flower_catalogDao extends BaseDao{

public function add_flower_catalog($flower_catalog){
 return $this->insert("flower_catalogs", $flower_catalog);

}

public function update_flower_catalog($id, $flower_catalog){
 $this->update("flower_catalogs", $id, $flower_catalog);
}

public function get_flower_catalog_by_id($id){
return $this->query_unique("SELECT * FROM flower_catalogs WHERE id = :id", ["id" => $id]);
}

public function get_all_flower_catalogs(){
return $this->query("SELECT * FROM flower_catalogs", []);

}
}



}

?>
