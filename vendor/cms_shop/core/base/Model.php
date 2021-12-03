<?php

namespace cms_shop\base;

use cms_shop\Db;

abstract class Model
{

    public $attributes = [];
    public $errors = [];
    public $rules = [];

    public function __construct(){
        Db::instance();
    }


}