<?php
require_once dirname(__FILE__)."/BaseDao.class.php";
class PhotographerDao extends BaseDao{

  public function __construct(){
    parent::__construct("photographers");
  }

  public function get_all_photographers(){
    return $this->query("SELECT * FROM photographers", []);
  }

}



?>
