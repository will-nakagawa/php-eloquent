<?php

use Illuminate\Database\Capsule\Manager as Capsule;

$config = require "config/database.php";

$capsule = new Capsule();

$capsule->addConnection($config['mysql']);

$capsule->setAsGlobal();

$capsule->bootEloquent();