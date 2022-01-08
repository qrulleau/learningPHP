<?php

$tasks = $database->selectAll('todos');
require 'views/contact.view.php';