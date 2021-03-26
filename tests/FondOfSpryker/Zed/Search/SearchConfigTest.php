<?php

namespace FondOfSpryker\Zed\Search;

use Codeception\Test\Unit;

class SearchConfigTest extends Unit
{
    /**
     * @var \PHPUnit\Framework\MockObject\MockObject|\FondOfSpryker\Zed\Search\SearchConfig
     */
    protected $searchConfig;

    /**
     * @return void
     */
    protected function _before(): void
    {
        $this->searchConfig = $this->getMockBuilder(SearchConfig::class)
            ->onlyMethods(['get'])
            ->getMock();
    }

    /**
     * @return void
     */
    public function testGetJsonIndexDefinitionDirectories(): void
    {
        $defaultPaths = $this->searchConfig->getJsonIndexDefinitionDirectories();
        $this->assertNotContains('fond-of-spryker', $defaultPaths);
    }
}
