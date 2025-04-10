<?php

/**
 * @author Jhonny Andres Gonzalez <jhonnygonzalezf@gmail.com>
 * Date: 2025-04-10 22:46:58
 */

namespace Feature\Core\Cards\Domain\ValueObjects;

use Core\Cards\Domain\ValueObjects\CardClickOutUrl;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

#[CoversClass(CardClickOutUrl::class)]
class CardClickOutUrlTest extends TestCase
{
    #[Test]
    public function testConstructShouldReturnCorrectly(): void
    {
        $value = 'localhost';
        $object = new CardClickOutUrl($value);

        $this->assertSame($value, $object->value());
    }
}
