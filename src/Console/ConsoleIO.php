<?php

namespace App\Console;

class ConsoleIO
{
    /**
     * @param string $message
     */
    public function output(string $message)
    {
        echo "$message\n";
    }

    /**
     * @param string $message
     *
     * @return string
     */
    public function readline(string $message): string
    {
        return readline("$message: ");
    }
}
