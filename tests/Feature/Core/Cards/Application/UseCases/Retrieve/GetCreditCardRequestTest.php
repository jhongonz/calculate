<?php

/**
 * @author Jhonny Andres Gonzalez <jhonnygonzalezf@gmail.com>
 * Date: 2025-04-10 22:40:45
 */

namespace Feature\Core\Cards\Application\UseCases\Retrieve;

use Core\Cards\Application\UseCases\Retrieve\GetCreditCardRequest;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

#[CoversClass(GetCreditCardRequest::class)]
class GetCreditCardRequestTest extends TestCase
{
    #[Test]
    public function testConstructShouldReturnCorrectly(): void
    {
        $search = ['1', '2', '3'];

        $request = new GetCreditCardRequest($search);
        $this->assertSame($search, $request->search());
    }
}
