<?php

namespace app\controllers;

use cms_shop\base\Controller;
use cms_shop\Cache;

class MainController extends AppController
{

    public function indexAction() {
        $brands = \R::find('brand', 'LIMIT 3');
        debug($brands);
        $this->setMeta('Главная страница', 'Описание', 'Ключевые слова');
        $this->set(compact('brands'));
    }

}