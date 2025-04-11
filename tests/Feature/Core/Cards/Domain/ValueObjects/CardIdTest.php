<?php

/**
 * @author Jhonny Andres Gonzalez <jhonnygonzalezf@gmail.com>
 * Date: 2025-04-10 22:51:01
 */

namespace Feature\Core\Cards\Domain\ValueObjects;

use Core\Cards\Domain\ValueObjects\CardId;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

#[CoversClass(CardId::class)]
class CardIdTest extends TestCase
{
    #[Test]
    public function testConstructShouldReturnCorrectly(): void
    {
        $value = 10;

        $object = new CardId($value);
        $this->assertSame($value, $object->value());
    }
}
