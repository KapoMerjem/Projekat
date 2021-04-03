<?php
require_once dirname(__FILE__)."/BaseDao.class.php";
class Flower_catalogDao extends BaseDao{

  public function __construct(){
    parent::__construct("flower_catalogs");
  }



}


?>
