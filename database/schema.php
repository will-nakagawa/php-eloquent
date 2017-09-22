<?php

use Illuminate\Database\Capsule\Manager as Capsule;

Capsule::schema()->create('test', function($table) {

    $table->increments('id');
    $table->string('teste');

});
