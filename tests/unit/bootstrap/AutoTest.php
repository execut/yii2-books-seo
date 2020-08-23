<?php
/**
 */

namespace execut\booksSeo\tests\unit\bootstrap;

use Codeception\Test\Unit;
use execut\books\Component;
use execut\booksSeo\bootstrap\Auto;
use execut\seo\crudFields\Fields;
use yii\helpers\UnsetArrayValue;

class AutoTest extends Unit
{
    public function testBootstrap()
    {
        $bootstrap = new Auto([
            'depends' => [
                'components' => new UnsetArrayValue(),
            ],
        ]);
        $books = $this->getMockForAbstractClass(Component::class);
        $books->expects($this->once())
            ->method('addBooksCrudFieldsPlugin')
            ->with($this->instanceOf(Fields::class));
        \yii::$app->setComponents([
            'books' => $books
        ]);
        $bootstrap->bootstrap(\yii::$app);
    }
}