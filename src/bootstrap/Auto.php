<?php
/**
 */

namespace execut\booksSeo\bootstrap;


use execut\books\Component;
use execut\seo\crudFields\Fields;
use execut\yii\Bootstrap;

class Auto extends Bootstrap
{
    protected $_defaultDepends = [
        'components' => [
            'books' => [
                'class' => Component::class
            ]
        ]
    ];

    public function bootstrap($app)
    {
        parent::bootstrap($app);
        $plugin = new Fields();
        \yii::$app->books->addBooksCrudFieldsPlugin($plugin);
    }
}