<?php
/**
 * @author Mamaev Yuriy (eXeCUT)
 * @link https://github.com/execut
 * @copyright Copyright (c) 2020 Mamaev Yuriy (eXeCUT)
 * @license http://www.apache.org/licenses/LICENSE-2.0
 */
namespace execut\booksSeo\tests\unit\bootstrap;

use Codeception\Test\Unit;
use execut\books\Component;
use execut\booksSeo\bootstrap\Auto;
use execut\seo\crudFields\Fields;
use yii\helpers\UnsetArrayValue;

/**
 * Class AutoTest
 * @package execut\booksSeo\tests
 */
class AutoTest extends Unit
{
    public function testBootstrap()
    {
        $bootstrap = new Auto([
            'depends' => [
                'components' => new UnsetArrayValue(),
            ],
        ]);
        $books = $this->getMockBuilder(Component::class)->getMock();
        $books->expects($this->once())
            ->method('addBooksCrudFieldsPlugin')
            ->with($this->isInstanceOf(Fields::class));
        \yii::$app->setComponents([
            'books' => $books
        ]);
        $bootstrap->bootstrap(\yii::$app);
    }
}
