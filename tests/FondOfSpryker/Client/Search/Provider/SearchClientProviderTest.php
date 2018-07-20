<?php

namespace FondOfSpryker\Client\Search\Provider;

use Codeception\Test\Unit;
use org\bovigo\vfs\vfsStream;
use ReflectionClass;
use Spryker\Shared\Config\Config;

class SearchClientProviderTest extends Unit
{
    /**
     * @var \FondOfSpryker\Client\Search\Provider\SearchClientProvider
     */
    protected $searchClientProvider;

    /**
     * @return void
     */
    protected function _before()
    {
        $this->vfsStreamDirectory = vfsStream::setup('root', null, [
            'config' => [
                'Shared' => [
                    'stores.php' => file_get_contents(codecept_data_dir('stores.php')),
                    'config_default.php' => file_get_contents(codecept_data_dir('config_default.php')),
                ],
            ],
        ]);

        $this->searchClientProvider = new SearchClientProvider();
    }

    /**
     * @return void
     */
    public function testGetClientConfig()
    {
        Config::getInstance()->init();

        $reflection = new ReflectionClass(get_class($this->searchClientProvider));

        $method = $reflection->getMethod('getClientConfig');
        $method->setAccessible(true);

        $clientConfig = $method->invokeArgs($this->searchClientProvider, []);

        $this->assertInternalType('array', $clientConfig);
        $this->assertTrue(array_key_exists('transport', $clientConfig));
        $this->assertEquals('Https', $clientConfig['transport']);
    }
}
