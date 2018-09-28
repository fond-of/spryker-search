<?php

namespace FondOfSpryker\Zed\Search;

use Codeception\Test\Unit;

class SearchConfigTest extends Unit
{
    /**
     * @var \FondOfSpryker\Zed\Search\SearchConfig
     */
    protected $searchConfig;

    /**
     * @return void
     */
    protected function _before()
    {
        $this->searchConfig = new SearchConfig();
    }

    /**
     * @return void
     */
    public function testGetJsonIndexDefinitionDirectories()
    {
        // no module in 'fond-of-spryker' namespace exists
        $defaultPaths = $this->searchConfig->getJsonIndexDefinitionDirectories();
        $this->assertNotContains('fond-of-spryker', $defaultPaths);
    }
}
