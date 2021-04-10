<?php

require_once dirname(__FILE__).'/../dao/BandDao.class.php';

class BandService{

  private $dao;
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
}

?>
