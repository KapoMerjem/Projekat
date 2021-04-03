<?php
require_once dirname(__FILE__)."/BaseDao.class.php";
class DecorDao extends BaseDao{

public function add_decor($decor){
 return $this->insert("decors", $decor);

}

public function update_decor($id, $decor){
 $this->update("decors", $id, $decor);
}

public function get_decor_by_id($id){
return $this->query_unique("SELECT * FROM decors WHERE id = :id", ["id" => $id]);
}

public function get_all_decors(){
return $this->query("SELECT * FROM decors", []);

}
}


}

?>
