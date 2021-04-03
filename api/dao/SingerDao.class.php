<?php
require_once dirname(__FILE__)."/BaseDao.class.php";
class SingerDao extends BaseDao{

  public function __construct(){
    parent::__construct("singers");
  }

  public function get_all_singers(){
    return $this->query("SELECT * FROM singers", []);
  }

}


?>
