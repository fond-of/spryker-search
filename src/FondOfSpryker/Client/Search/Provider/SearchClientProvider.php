<?php

namespace FondOfSpryker\Client\Search\Provider;

use Spryker\Client\Search\Provider\SearchClientProvider as BaseSearchClientProvider;
use Spryker\Shared\Config\Config;
use Spryker\Shared\Search\SearchConstants;

class SearchClientProvider extends BaseSearchClientProvider
{
    /**
     * @return array
     */
    protected function getClientConfig()
    {
        $config = parent::getClientConfig();

        $config['transport'] = ucfirst(Config::get(SearchConstants::ELASTICA_PARAMETER__TRANSPORT));

        return $config;
    }
}
