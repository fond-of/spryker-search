<?php

namespace FondOfSpryker\Client\Search;

use FondOfSpryker\Client\Search\Provider\IndexClientProvider;
use FondOfSpryker\Client\Search\Provider\SearchClientProvider;
use Codeception\Test\Unit;
use ReflectionClass;

class SearchFactoryTest extends Unit
{
    /**
     * @var \FondOfSpryker\Client\Search\SearchFactory
     */
    protected $searchFactory;

    /**
     * @return void
     */
    protected function _before()
    {
        $this->searchFactory = new SearchFactory();
    }

    /**
     * @return void
     *
     * @throws \ReflectionException
     */
    public function testCreateSearchClientProvider() {
        $reflection = new ReflectionClass(get_class($this->searchFactory));

        $method = $reflection->getMethod('createSearchClientProvider');
        $method->setAccessible(true);

        $searchClientProvider = $method->invokeArgs($this->searchFactory, []);

        $this->assertInstanceOf(SearchClientProvider::class, $searchClientProvider);
    }

    /**
     * @return void
     *
     * @throws \ReflectionException
     */
    public function testCreateIndexClientProvider() {
        $reflection = new ReflectionClass(get_class($this->searchFactory));

        $method = $reflection->getMethod('createIndexClientProvider');
        $method->setAccessible(true);

        $indexClientProvider = $method->invokeArgs($this->searchFactory, []);

        $this->assertInstanceOf(IndexClientProvider::class, $indexClientProvider);
    }
}
