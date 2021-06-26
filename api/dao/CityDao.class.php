<?php
require_once dirname(__FILE__)."/BaseDao.class.php";

class CityDao extends BaseDao{

  public function __construct(){
    parent::__construct("cities");
  }

  public function get_cities($search, $offset, $limit, $order){

    switch(substr($order, 0, 1)){
      case '-': $order_direction = "ASC"; break;
      case '+': $orded_direction = "DESC"; break;
      default: throw new Exception("Invalid order format. First character should be either + or -"); break;
    }

    $order_column = substr($order, 1);
    //$this->$connection->quote(substr($order, 1));

      return $this->query("SELECT *
                           FROM cities
                           WHERE LOWER(name) LIKE CONCAT('%', :name, '%')
                           ORDER BY ${order_column} ${order_direction}
                           LIMIT ${limit} OFFSET ${offset}",
                           ["name" => strtolower($search)]);
    }

}

?>
