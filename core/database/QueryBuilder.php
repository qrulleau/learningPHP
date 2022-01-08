<?php

class QueryBuilder {
  
  protected $pdo;

  public function __construct($pdo)
  {
    $this->pdo = $pdo;
  }
  
  public function selectAll($table){
    // prepare the sql request
    $statement = $this->pdo->prepare("select * from {$table};");
    
    // need to stock it on a variable to launch it
    $statement->execute();
    // allow you to display the result as an object instead of an array
    return $statement->fetchAll(PDO::FETCH_CLASS);
  }
}