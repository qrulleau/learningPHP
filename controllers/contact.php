<?php

$tasks = $app['database']->selectAll('todos');
require 'views/contact.view.php';