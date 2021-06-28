<?php

require_once dirname (__FILE__).'/BaseService.class.php';
require_once dirname(__FILE__).'/../dao/PhotographerDao.class.php';

class PhotographerService extends BaseService{

  public function __construct(){
    $this->dao = new PhotographerDao();
  }

  public function get_photographers($id_city, $offset, $limit, $search, $order){
    return $this->dao->get_photographers($id_city, $offset, $limit, $search, $order);
  }

public function add($photographer){
  try {
    $photographer['created_at'] = date(Config::DATE_FORMAT);
    return parent::add($photographer);
  } catch (\Exception $e) {
    if(str_contains($e->getMessage(), 'photographers.uq_photographer_name')){
       throw new Exception("Photographer wuth same name already exist", 400, $e);
     }else {
      throw $e;
    }
    print_r($e);
    die;
}
}
}
?>
