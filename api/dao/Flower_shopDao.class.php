<?php
require_once dirname(__FILE__)."/BaseDao.class.php";
class Flower_shopDao extends BaseDao{

  public function __construct(){
    parent::__construct("flower_shops");
  }

  public function get_all_flower_shops(){
    return $this->query("SELECT * FROM flower_shops", []);
  }

}



?>
