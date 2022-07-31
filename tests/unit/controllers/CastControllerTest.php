<?php

declare(strict_types=1);

namespace Tests\Unit;

class CastControllerTest extends AbstractUnitTest
{
    public function testModelInstanceOf(): void
    {
        $this->assertInstanceOf(\CastController::class, new \CastController());
    }
}
