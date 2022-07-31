<?php

declare(strict_types=1);

namespace Tests\Unit;

class LanguagesControllerTest extends AbstractUnitTest
{
    public function testModelInstanceOf(): void
    {
        $this->assertInstanceOf(\LanguagesController::class, new \LanguagesController());
    }
}
