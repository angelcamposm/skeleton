<?php

declare(strict_types=1);

namespace Tests\unit;

use PHPUnit\Framework\Attributes\CoversNothing;
use PHPUnit\Framework\Attributes\TestDox;
use Tests\SkeletonTestCase;

#[CoversNothing]
#[TestDox('Initial sample assertions')]
final class SampleAssertionsTest extends SkeletonTestCase
{
    #[TestDox('Assert false equals false')]
    public function testAssertFalseEqualsFalse(): void
    {
        $this->assertFalse(false);
    }

    #[TestDox('Assert true equals true')]
    public function testAssertTrueEqualsTrue(): void
    {
        $this->assertTrue(true);
    }
}
