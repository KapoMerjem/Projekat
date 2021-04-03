<?php
require_once dirname(__FILE__)."/BaseDao.class.php";

class BandDao extends BaseDao{

  public function add_band($band){
   return $this->insert("bands", $band);

  }

  public function update_band($id, $band){
   $this->update("bands", $id, $band);
}

  public function get_band_by_id($id){
  return $this->query_unique("SELECT * FROM bands WHERE id = :id", ["id" => $id]);
}

  public function get_all_bands(){
  return $this->query("SELECT * FROM bands", []);

  }
}

?>
