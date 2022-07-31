<?php

declare(strict_types=1);

namespace Tests\Unit;

class CompaniesControllerTest extends AbstractUnitTest
{
    public function testModelInstanceOf(): void
    {
        $this->assertInstanceOf(\CompaniesController::class, new \CompaniesController());
    }
}
