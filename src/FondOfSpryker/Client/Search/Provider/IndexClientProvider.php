<?php

namespace FondOfSpryker\Client\Search\Provider;

use Spryker\Client\Search\Provider\IndexClientProvider as BaseIndexClientProvider;
use Spryker\Shared\Config\Config;
use Spryker\Shared\Search\SearchConstants;

class IndexClientProvider extends BaseIndexClientProvider
{
    /**
     * @return array
     *
     * @throws \Exception
     */
    protected function getClientConfig()
    {
        $config = parent::getClientConfig();

        $config['transport'] = ucfirst(Config::get(SearchConstants::ELASTICA_PARAMETER__TRANSPORT));

        return $config;
    }
}
