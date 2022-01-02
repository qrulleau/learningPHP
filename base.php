<?php

echo "bonjour";

$name = $_GET['name'];
echo "$name \n";
//allow you to get value from the url by the key you put as parameter
//!! careful you can have injection so use htmlspecialchars() to prevent it

echo "hello, " . htmlspecialchars($_GET['name']). "\r";

$greetings = "quentin rulleau";
// to import a file 
require 'base.php';

// 2 way to create an array
$animals = ["dog", "cat" , "horse"];
$person = [
  'age' => 36,
  'hair' => "brown"
];

// to display value from an array
foreach ($animals as $animal) {
  echo $animal;
}

// to add a value with a key to an array 
$animals[]= 'elephant';
// or
$person['name']= 'Jeffrey';

// to display the value of a variable for debugging 
var_dump($person);
// if you want to display only the value and hidden what next you need to use this 
die(var_dump($person));

// to remove an item of an array
unset($person['age']);

// ternarie function 
$task['completed'] ? 'completed' : 'incomplete';

//condition
if ($task['completed']){
  echo 'complete';
} else {
  echo 'incomplete';
}

// clean way to do it directly on html file
<?php if ($task['completed']) : ?>
  <span></span>
<?php else : ?>
  <span></span>
<?php endif; ?>

//creating function
function (){
  echo 'bonjour';
}
?>