<?php

declare(strict_types=1);

namespace Tests\Unit;

class MovieLanguageTest extends AbstractUnitTest
{
    public function testModelInstanceOf(): void
    {
        $this->assertInstanceOf(\MovieLanguage::class, new \MovieLanguage());
    }
}
