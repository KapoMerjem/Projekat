<?php

require_once dirname (__FILE__).'/BaseService.class.php';
require_once dirname(__FILE__).'/../dao/CityDao.class.php';

class CityService extends BaseService{

  public function __construct(){
    $this->dao = new CityDao();
  }

  public function get_cities($search, $offset, $limit){
    if($search){
      return $this->dao->get_cities($search, $offset, $limit);
    }else{
      return $this->dao->get_all($offset, $limit);
    }
  }

public function add($city){
  //validation of account data
  if(!isset($city['name'])) throw new Exception("Name is missing! ");

  return parent::add($city);

  }
}
?>
