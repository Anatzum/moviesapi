<?php

declare(strict_types=1);

namespace Tests\Unit;

class MovieCompanyTest extends AbstractUnitTest
{
    public function testModelInstanceOf(): void
    {
        $this->assertInstanceOf(\MovieCompany::class, new \MovieCompany());
    }
}
