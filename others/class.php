<?php
// https://www.pierre-giraud.com/php-mysql-apprendre-coder-cours/oriente-objet-constructeur-destructeur/

// making small todo front 
class Task {

  public $description;
  
  public $completed = false;


  public function __construct($description)
  {
    $this->description = $description;
  }

  public function complete()
  {
    $this->completed = true;
  }
  public function isComplete()
  {
    return $this->completed;
  }

}

// new allow you to instanciate the object here Task
$tasks = [
  new Task('Go to the bed'),
  new Task('work'),
  new Task('go outside breathing')
];

$tasks[0]->complete();

require 'todo.php';