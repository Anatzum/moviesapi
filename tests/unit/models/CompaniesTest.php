<?php

declare(strict_types=1);

namespace Tests\Unit;

class CompaniesTest extends AbstractUnitTest
{
    public function testModelInstanceOf(): void
    {
        $this->assertInstanceOf(\Companies::class, new \Companies());
    }
}
