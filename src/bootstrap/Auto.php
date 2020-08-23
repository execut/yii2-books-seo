<?php
/**
 * @author Mamaev Yuriy (eXeCUT)
 * @link https://github.com/execut
 * @copyright Copyright (c) 2020 Mamaev Yuriy (eXeCUT)
 * @license http://www.apache.org/licenses/LICENSE-2.0
 */
namespace execut\booksSeo\bootstrap;

use execut\books\Component;
use execut\seo\crudFields\Fields;
use execut\yii\Bootstrap;

/**
 * Auto bootstrap for module
 * @package execut\booksSeo
 */
class Auto extends Bootstrap
{
    /**
     * {@inheritDoc}
     */
    protected $_defaultDepends = [
        'components' => [
            'books' => [
                'class' => Component::class
            ]
        ]
    ];

    /**
     * {@inheritDoc}
     */
    public function bootstrap($app)
    {
        parent::bootstrap($app);
        $plugin = new Fields();
        \yii::$app->books->addBooksCrudFieldsPlugin($plugin);
    }
}
