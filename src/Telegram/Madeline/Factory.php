<?php

namespace App\Telegram\Madeline;

use App\Support\Traits\Singleton;
use danog\MadelineProto\API;

class Factory
{
    use Singleton;

    /**
     * @var string
     */
    protected string $madelineDir;

    protected function __construct(string $madelineDir)
    {
        $this->madelineDir = $madelineDir;
    }

    /**
     * @param array $settings
     *
     * @return \danog\MadelineProto\API
     */
    public function make(array $settings): API
    {
        $this->clearMadelineDir();

        return new API($this->madelineDir . 'session.madeline', $settings);
    }

    /**
     * @return void
     */
    protected function clearMadelineDir()
    {
        foreach (glob($this->madelineDir . '*') as $file) {
            unlink($file);
        }
    }
}
