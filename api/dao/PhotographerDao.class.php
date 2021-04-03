<?php
require_once dirname(__FILE__)."/BaseDao.class.php";
class PhotographerDao extends BaseDao{

public function add_photographer($photographer){
    return $this->insert("photgraphers", $photographer);

}

public function update_photographer($id, $photographer){
 $this->update("photographers", $id, $photographer);
}

public function get_photographer_by_id($id){
return $this->query_unique("SELECT * FROM photographers WHERE id = :id", ["id" => $id]);
}

public function get_all_photographers(){
return $this->query("SELECT * FROM photographers", []);

}
}



?>
