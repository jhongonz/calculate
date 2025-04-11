<?php

/**
 * @author Jhonny Andres Gonzalez <jhonnygonzalezf@gmail.com>
 * Date: 2025-04-10 22:48:11
 */

namespace Feature\Core\Cards\Domain\ValueObjects;

use Core\Cards\Domain\ValueObjects\CardFeatures;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

#[CoversClass(CardFeatures::class)]
class CardFeaturesTest extends TestCase
{
    #[Test]
    public function testConstructShouldReturnCorrectly(): void
    {
        $value = ['sandbox'];

        $object = new CardFeatures($value);
        $this->assertSame($value, $object->value());
    }

    #[Test]
    public function testConstructShouldReturnCorrectlyWithDefaultValue(): void
    {
        $object = new CardFeatures();
        $this->assertSame([], $object->value());
    }
}
