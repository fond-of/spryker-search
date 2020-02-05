<?php

namespace FondOfSpryker\Zed\Search\Business;

use FondOfSpryker\Client\Search\Provider\IndexClientProvider;
use FondOfSpryker\Client\Search\Provider\SearchClientProvider;
use Spryker\Zed\Search\Business\SearchBusinessFactory as BaseSearchBusinessFactory;

/**
 * @method \FondOfSpryker\Zed\Search\SearchConfig getConfig()
 */
class SearchBusinessFactory extends BaseSearchBusinessFactory
{
    /**
     * @return \FondOfSpryker\Client\Search\Provider\IndexClientProvider
     */
    public function createIndexProvider()
    {
        return new IndexClientProvider();
    }

    /**
     * @return \FondOfSpryker\Client\Search\Provider\SearchClientProvider
     */
    public function createSearchClientProvider()
    {
        return new SearchClientProvider();
    }
}
