<?php

namespace FondOfSpryker\Client\Search;

use FondOfSpryker\Client\Search\Provider\IndexClientProvider;
use FondOfSpryker\Client\Search\Provider\SearchClientProvider;
use Spryker\Client\Search\SearchFactory as BaseSearchFactory;

class SearchFactory extends BaseSearchFactory
{
    /**
     * @return \FondOfSpryker\Client\Search\Provider\SearchClientProvider
     */
    protected function createSearchClientProvider()
    {
        return new SearchClientProvider();
    }

    /**
     * @return \FondOfSpryker\Client\Search\Provider\IndexClientProvider
     */
    protected function createIndexClientProvider()
    {
        return new IndexClientProvider();
    }
}
