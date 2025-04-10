<?php

/**
 * @author Jhonny Andres Gonzalez <jhonnygonzalezf@gmail.com>
 * Date: 2025-04-10 22:55:58
 */

namespace Feature\Core\Cards\Domain\ValueObjects;

use Core\Cards\Domain\ValueObjects\CardName;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

#[CoversClass(CardName::class)]
class CardNameTest extends TestCase
{
    #[Test]
    public function testConstructShouldReturnCorrectly(): void
    {
        $value = 'Sandbox';
        $object = new CardName($value);

        $this->assertSame($value, $object->value());
    }
}
