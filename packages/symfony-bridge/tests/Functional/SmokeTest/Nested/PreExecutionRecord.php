<?php

namespace SimpleBus\SymfonyBridge\Tests\Functional\SmokeTest\Nested;

final class PreExecutionRecord
{
    public int $level;

    public function __construct(int $level)
    {
        $this->level = $level;
    }
}
