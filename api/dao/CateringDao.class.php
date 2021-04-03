<?php
require_once dirname(__FILE__)."/BaseDao.class.php";

class CateringDao extends BaseDao{


    public function __construct(){
      parent::__construct("caterings");
    }

    public function get_all_caterings(){
      return $this->query("SELECT * FROM caterings", []);
    }

  }


?>
