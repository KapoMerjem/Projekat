<?php

require_once dirname (__FILE__).'/BaseService.class.php';
require_once dirname(__FILE__).'/../dao/BandDao.class.php';

class BandService extends BaseService{

  public function __construct(){
    $this->dao = new BandDao();
  }

  public function get_bands($search, $offset, $limit){
    if($search){
      return $this->dao->get_bands($search, $offset, $limit);
    }else{
      return $this->dao->get_all($offset, $limit);
    }
  }

public function add($band){
  //validation of account data
  if(!isset($band['name'])) throw new Exception("Bla bla name is missing! ");

  return parent::add($band);

  }
}
?>
