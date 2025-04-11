<?php

/**
 * @author Jhonny Andres Gonzalez <jhonnygonzalezf@gmail.com>
 * Date: 2025-04-10 22:44:26
 */

namespace Feature\Core\Cards\Domain\ValueObjects;

use Core\Cards\Domain\ValueObjects\CardAnnualFee;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

#[CoversClass(CardAnnualFee::class)]
class CardAnnualFeeTest extends TestCase
{
    #[Test]
    public function testConstructShouldReturnCorrectly(): void
    {
        $value = 10.5;
        $object = new CardAnnualFee($value);

        $this->assertSame($value, $object->value());
    }

    #[Test]
    public function testConstructShouldReturnCorrectlyWithDefaultValue(): void
    {
        $object = new CardAnnualFee();

        $this->assertSame(0.0, $object->value());
    }
}
