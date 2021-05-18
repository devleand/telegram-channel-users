<?php

namespace App\Result;

use App\Contracts\View\View;
use App\Support\Traits\Singleton;
use DateTime;

class ResultsManager
{
    use Singleton;

    /**
     * @var string
     */
    protected string $resultsDir;

    protected function __construct(string $resultsDir)
    {
        $this->resultsDir = $resultsDir;
    }

    /**
     * Put the view to a file and return its name.
     *
     * @param \App\Contracts\View\View $view
     *
     * @return string|null
     */
    public function put(View $view): ?string
    {
        return file_put_contents(
            $filePath = $this->getResultsPath($this->generateResultFileName() . '.' . $view->getExtension()),
            $view->render()
        ) ? realpath($filePath) : null;
    }

    /**
     * @return string
     */
    protected function generateResultFileName(): string
    {
        return (new DateTime())->format('Y-m-d H:i:s');
    }

    /**
     * @param string $path
     *
     * @return string
     */
    protected function getResultsPath(string $path = ''): string
    {
        return $this->resultsDir . $path;
    }
}
