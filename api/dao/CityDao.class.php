<?php
require_once dirname(__FILE__)."/BaseDao.class.php";
class CityDao extends BaseDao{

  public function __construct(){
    parent::__construct("cities");
  }

    public function get_bands($search, $offset, $limit){
      return $this->query("SELECT *
                           FROM bands
                           WHERE LOWER(name) LIKE CONCAT('%', :name, '%')
                           LIMIT ${limit} OFFSET ${offset}", ["name" => strtolower($search)]);
    }

}

?>
