<?php

namespace FondOfSpryker\Zed\Search;

use Spryker\Zed\Search\SearchConfig as SprykerSearchConfig;

class SearchConfig extends SprykerSearchConfig
{
    /**
     * @return array
     */
    public function getJsonIndexDefinitionDirectories()
    {
        $directories = parent::getJsonIndexDefinitionDirectories();

        $fondOfSprykerSharedGlobPattern = APPLICATION_ROOT_DIR . '/vendor/fond-of-spryker/*/src/*/Shared/*/IndexMap/';
        if (glob($fondOfSprykerSharedGlobPattern)) {
            $directories[] = $fondOfSprykerSharedGlobPattern;
        }

        return $directories;
    }
}
