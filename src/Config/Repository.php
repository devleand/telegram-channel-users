<?php

namespace App\Config;

use App\Support\Traits\Singleton;

class Repository
{
    use Singleton;

    /**
     * @var array
     */
    protected array $configs;

    public function __construct(string $configFile)
    {
        $this->configs = $this->parseConfigFile($configFile);
    }

    /**
     * @param string $key
     *
     * @return mixed
     */
    public function getConfig(string $key)
    {
        return $this->configs[$key];
    }

    /**
     * @param string $configFile
     *
     * @return array
     */
    protected function parseConfigFile(string $configFile): array
    {
        return json_decode(file_get_contents($configFile), true);
    }
}
