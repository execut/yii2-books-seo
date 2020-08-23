<?php
namespace execut\booksSeo\migrations;
use execut\seo\FieldsAttacher;
use execut\yii\migration\Migration;
use execut\yii\migration\Inverter;

class m200823_161757_addSeoFields extends Migration
{
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

