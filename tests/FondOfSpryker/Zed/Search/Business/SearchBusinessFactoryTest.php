<?php

namespace FondOfSpryker\Zed\Search\Business;

use FondOfSpryker\Client\Search\Provider\IndexClientProvider;
use FondOfSpryker\Client\Search\Provider\SearchClientProvider;
use Codeception\Test\Unit;
use ReflectionClass;

class SearchBusinessFactoryTest extends Unit
{
    /**
     * @var \FondOfSpryker\Zed\Search\Business\SearchBusinessFactory
     */
    protected $searchBusinessFactory;

    /**
     * @return void
     */
    protected function _before()
    {
        $this->searchBusinessFactory = new SearchBusinessFactory();
    }

    /**
     * @return void
     *
     * @throws \ReflectionException
     */
    public function testCreateSearchClientProvider() {
        $reflection = new ReflectionClass(get_class($this->searchBusinessFactory));

        $method = $reflection->getMethod('createSearchClientProvider');
        $method->setAccessible(true);

        $searchClientProvider = $method->invokeArgs($this->searchBusinessFactory, []);

        $this->assertInstanceOf(SearchClientProvider::class, $searchClientProvider);
    }

    /**
     * @return void
     *
     * @throws \ReflectionException
     */
    public function testCreateIndexClientProvider() {
        $reflection = new ReflectionClass(get_class($this->searchBusinessFactory));

        $method = $reflection->getMethod('createIndexProvider');
        $method->setAccessible(true);

        $indexClientProvider = $method->invokeArgs($this->searchBusinessFactory, []);

        $this->assertInstanceOf(IndexClientProvider::class, $indexClientProvider);
    }
}
