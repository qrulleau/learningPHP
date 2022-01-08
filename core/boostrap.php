<?php

$config = require 'config.php';

require 'Router.php';
require 'database/QueryBuilder.php';
require 'database/Connexion.php';

return new QueryBuilder(
  Connexion::make($config['database'])
);