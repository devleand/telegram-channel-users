<?php

namespace App\Support\Traits;

trait Singleton
{
    /**
     * Instance of the current class.
     *
     * @var object|null
     */
    protected static ?object $instance = null;

    protected function __construct()
    {
        //
    }

    /**
     * @return static
     */
    public static function getInstance(): object
    {
        if (is_null(static::$instance)) {
            static::$instance = new static(...func_get_args());
        }

        return static::$instance;
    }
}
