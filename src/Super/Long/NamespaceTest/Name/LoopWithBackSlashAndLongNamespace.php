<?php

declare(strict_types=1);

namespace App\Super\Long\NamespaceTest\Name;

use App\AbstractLoop;

class LoopWithBackSlashAndLongNamespace extends AbstractLoop
{
    public function __invoke()
    {
        $time = microtime(true);

        for ($i = 0; $i < 1000000; $i++) {
            \count($this->loop);
        }

        return microtime(true) - $time;
    }
}
