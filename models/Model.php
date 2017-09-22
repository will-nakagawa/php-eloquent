<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent {

    protected $table = "model";

    protected $fillable = [''];

    public $timestamps = false;

}