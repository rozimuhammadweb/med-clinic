<?php

namespace backend\widgets;

use yii\base\Widget;

class Index extends Widget
{
    public function run()
    {
        return $this->render('index');
  }
}