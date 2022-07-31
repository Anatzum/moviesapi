<?php

declare(strict_types=1);

namespace Tests\Unit;

class RatingsControllerTest extends AbstractUnitTest
{
    public function testModelInstanceOf(): void
    {
        $this->assertInstanceOf(\RatingsController::class, new \RatingsController());
    }
}
