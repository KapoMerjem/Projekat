<?php
require_once dirname(__FILE__)."/BaseDao.class.php";

class BandDao extends BaseDao{

  public function __construct(){
    parent::__construct("bands");
  }

  public function get_bands($search, $offset, $limit){
    return $this->query("SELECT *
                         FROM bands
                         WHERE LOWER(name) LIKE CONCAT('%', :name, '%')
                         LIMIT ${limit} OFFSET ${offset}", ["name" => strtlower($search)]);
  }

}

?>
