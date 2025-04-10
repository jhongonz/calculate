<?php

/**
 * @author Jhonny Andres Gonzalez <jhonnygonzalezf@gmail.com>
 * Date: 2025-04-10 22:54:35
 */

namespace Feature\Core\Cards\Domain\ValueObjects;

use Core\Cards\Domain\ValueObjects\CardIssuer;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

#[CoversClass(CardIssuer::class)]
class CardIssuerTest extends TestCase
{
    #[Test]
    public function testConstructShouldReturnCorrectly(): void
    {
        $value = 'Bank of Sandbox';
        $object = new CardIssuer($value);

        $this->assertSame($value, $object->value());
    }
}
