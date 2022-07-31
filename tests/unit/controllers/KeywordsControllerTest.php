<?php

declare(strict_types=1);

namespace Tests\Unit;

class KeywordsControllerTest extends AbstractUnitTest
{
    public function testModelInstanceOf(): void
    {
        $this->assertInstanceOf(\KeywordsController::class, new \KeywordsController());
    }
}
