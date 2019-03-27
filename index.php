<?php
declare(strict_types=1);

use App\LoopWithBackSlash;
use App\LoopWithoutBackSlash;
use App\Super\Long\NamespaceTest\Name\LoopWithBackSlashAndLongNamespace;
use App\Super\Long\NamespaceTest\Name\LoopWithoutBackSlashAndLongNamespace;
use App\Super\Long\NamespaceTest\With\Extra\Extra\Extra\Long\Name\LoopWithBackSlashAndExtraLongNamespace;
use App\Super\Long\NamespaceTest\With\Extra\Extra\Extra\Long\Name\LoopWithoutBackSlashAndExtraLongNamespace;

require __DIR__ . '/vendor/autoload.php';

echo '<table><thead><tr><th>Title</th><th>Time</th></tr></thead>';
echo '<tr><td>Count with backslash</td><td>' . (new LoopWithBackSlash())->__invoke() . '</td></tr>';
echo '<tr><td>Count without backslash</td><td>' . (new LoopWithoutBackSlash())->__invoke() . '</td></tr>';
echo '<tr><td>' .
    'Count with backslash and long namespace</td><td>' . (new LoopWithBackSlashAndLongNamespace())->__invoke() .
    '</td></tr>';
echo '<tr><td>' .
    'Count without backslash and long namespace</td><td>' . (new LoopWithoutBackSlashAndLongNamespace())->__invoke() .
    '</td></tr>';
echo '<tr><td>' .
    'Count with backslash and long namespace</td><td>' . (new LoopWithBackSlashAndExtraLongNamespace())->__invoke() .
    '</td></tr>';
echo '<tr><td>' .
    'Count without backslash and long namespace</td><td>' .
    (new LoopWithoutBackSlashAndExtraLongNamespace())->__invoke() .
    '</td></tr>';

echo '</table>';
