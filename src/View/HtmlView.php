<?php

namespace App\View;

class HtmlView extends BaseView
{
    /**
     * @inheritDoc
     */
    public function getExtension(): string
    {
        return 'html';
    }

    /**
     * @inheritDoc
     */
    public function render(): string
    {
        $rows = '';
        foreach (($this->source)() as $user) {
            $rows .= <<<HTML
<tr>
    <td>{$user->getUsername()}</td>
    <td>{$user->getFirstName()}</td>
    <td>{$user->getLastName()}</td>
</tr>
HTML;
        }

        return $this->generateTemplate(<<<HTML
<table>
    <thead>
        <tr>
            <th>username</th>
            <th>first_name</th>
            <th>last_name</th>
        </tr>
    </thead>
    <tbody>
    <h1>Channel: {$this->channel}</h1>
        $rows
    </tbody>
</table>
HTML);
    }

    protected function generateTemplate(string $body): string
    {
        return <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Channel users</title>
    <style>
        table {
            border-collapse: collapse;
            border: 1px solid #000000;
        }

        td, th {
            border: 1px solid #000000;
            padding: 5px;
        }
    </style>
</head>
<body>
$body
</body>
</html>

HTML;
    }
}
