<?php
declare(strict_types=1);

namespace PhpMyAdmin\SqlParser\Tests\Parser;

use PhpMyAdmin\SqlParser\Tests\TestCase;

class UpdateStatementTest extends TestCase
{
    /**
     * @param mixed $test
     *
     * @dataProvider updateProvider
     */
    public function testUpdate($test)
    {
        $this->runParserTest($test);
    }

    public function updateProvider()
    {
        return [
            ['parser/parseUpdate'],
            ['parser/parseUpdate2'],
            ['parser/parseUpdate3'],
            ['parser/parseUpdateErr'],
        ];
    }
}
