<?php

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

$database = require 'core/boostrap.php';

$url = trim($_SERVER['REQUEST_URI'], '/');

require Router::load('routes.php')
  ->direct($url);