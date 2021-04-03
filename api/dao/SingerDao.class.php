<?php
require_once dirname(__FILE__)."/BaseDao.class.php";
class SingerDao extends BaseDao{

  public function add_singer($singer){
   return $this->insert("singers", $singer);

  }

  public function update_singer($id, $singer){
   $this->update("singers", $id, $singer);
  }

  public function get_singer_by_id($id){
  return $this->query_unique("SELECT * FROM singers WHERE id = :id", ["id" => $id]);
  }

  public function get_all_singers(){
  return $this->query("SELECT * FROM singers", []);

  }
  }


?>
