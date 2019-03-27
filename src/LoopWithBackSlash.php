<?php

declare(strict_types=1);

namespace App;

class LoopWithBackSlash extends AbstractLoop
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
