<?php

namespace App\View;

use App\Contracts\View\View;

abstract class BaseView implements View
{
    /**
     * @var string
     */
    protected string $channel;

    /**
     * @var \App\View\UserDto[]|\Closure
     */
    protected $source;

    /**
     * BaseView constructor.
     *
     * @param \App\View\UserDto[]|\Closure $source
     */
    public function __construct(string $channel, $source)
    {
        $this->channel = $channel;
        $this->source = $source;
    }
}
