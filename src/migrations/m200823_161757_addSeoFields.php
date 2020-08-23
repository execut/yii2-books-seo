<?php
/**
 * @author Mamaev Yuriy (eXeCUT)
 * @link https://github.com/execut
 * @copyright Copyright (c) 2020 Mamaev Yuriy (eXeCUT)
 * @license http://www.apache.org/licenses/LICENSE-2.0
 */
namespace execut\booksSeo\migrations;

use execut\seo\FieldsAttacher;
use execut\yii\migration\Migration;
use execut\yii\migration\Inverter;

/**
 * Class m200823_161757_addSeoFields
 * @package execut\booksSeo
 */
class m200823_161757_addSeoFields extends Migration
{
    /**
     * {@inheritDoc}
     */
    public function initInverter(Inverter $i)
    {
        $attacher = new FieldsAttacher([
            'db' => $this->db,
            'tables' => [
                'example_books'
            ]
        ]);
        $attacher->initInverter($i);
    }
}
