<?php
require_once dirname(__FILE__)."/BaseDao.class.php";
class Flower_shopDao extends BaseDao{

public function add_flower_shop($flower_shop){
 return $this->insert("flower_shops", $flower_shop);

}

public function update_flower_shop($id, $flower_shop){
 $this->update("flower_shops", $id, $flower_shop);
}

public function get_flower_shop_by_id($id){
return $this->query_unique("SELECT * FROM flower_shops WHERE id = :id", ["id" => $id]);
}

public function get_all_flower_shops(){
return $this->query("SELECT * FROM flower_shops", []);

}
}



?>
