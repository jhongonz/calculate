<?php

/**
 * @author Jhonny Andres Gonzalez <jhonnygonzalezf@gmail.com>
 * Date: 2025-04-10 22:53:08
 */

namespace Feature\Core\Cards\Domain\ValueObjects;

use Core\Cards\Domain\ValueObjects\CardInterestRate;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

#[CoversClass(CardInterestRate::class)]
class CardInterestRateTest extends TestCase
{
    #[Test]
    public function testConstructShouldReturnCorrectly(): void
    {
        $value = 12.3;

        $object = new CardInterestRate($value);
        $this->assertSame($value, $object->value());
    }

    #[Test]
    public function testConstructShouldReturnCorrectlyWithDefaultValue(): void
    {
        $object = new CardInterestRate();
        $this->assertSame(0.0, $object->value());
    }
}
