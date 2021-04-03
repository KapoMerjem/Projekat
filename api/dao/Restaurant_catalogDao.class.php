<?php
require_once dirname(__FILE__)."/BaseDao.class.php";
class Restaurnat_catalogDao extends BaseDao{

  public function __construct(){
    parent::__construct("restaurant_catalogs");
  }



}


?>
