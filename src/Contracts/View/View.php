<?php

namespace App\Contracts\View;

interface View
{
    /**
     * @return string
     */
    public function getExtension(): string;

    /**
     * @return string
     */
    public function render(): string;
}
