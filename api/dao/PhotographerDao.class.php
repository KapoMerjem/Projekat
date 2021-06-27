<?php
require_once dirname(__FILE__)."/BaseDao.class.php";

class PhotographerDao extends BaseDao{

  public function __construct(){
    parent::__construct("photographers");
  }

  public function get_photographers($id_city, $offset, $limit, $search, $order){
    list($order_column, $order_direction) = self::parse_order($order);

    $params = ["id_city" => $id_city];
    $query = "SELECT *
              FROM photographers
              WHERE id_city = :id_city";

    if(isset($search)){
      $query .= " AND LOWER(name) LIKE CONCAT ('%', :search, '%') OR LOWER(subject) LIKE CONCAT('%', :search, '%'))";
      $params['search'] = strtolower($search);
    }

      $query .="ORDER BY ${order_column} ${order_direction} ";
      $query .="LIMIT ${limit} OFFSET ${offset}";

    return $this->query($query, ["id_city" => $id_city]);
  }

}
?>
