<?php

require_once dirname(__FILE__)."/../config.php";
//echo "RADIIII";
class BaseDao{

protected $connection;

  public function __construct($table){
    $this->table = $table;
    try {
     $this->connection= new PDO("mysql:host=".Config::DB_HOST.";dbname=".Config::DB_SCHEME, Config::DB_USERNAME, Config::DB_PASSWORD);
     $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   } catch(PDOException $e) {
     throw $e;
   }
}
  protected function insert($table, $entity){

  protected function execute_update($table, $id, $entity, $id_column = "id"){

  protected function query($query, $params){

  protected function query_unique($query, $params){

  public function add($entity){
    return $this->insert($this->table, $entity);
  }

  public function update($id, $entity){
    $this->execute_update($this->table, $id, $entity);
  }

  public function get_by_id($id){
    return $this->query_unique("SELECT * FROM $(this->table) WHERE id = :id", ["id" => $id]);
  }
}
?>
