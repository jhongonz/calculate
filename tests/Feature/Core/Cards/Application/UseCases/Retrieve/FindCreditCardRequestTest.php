<?php

/**
 * @author Jhonny Andres Gonzalez <jhonnygonzalezf@gmail.com>
 * Date: 2025-04-10 22:26:25
 */

namespace Feature\Core\Cards\Application\UseCases\Retrieve;

use Core\Cards\Application\UseCases\Retrieve\FindCreditCardRequest;
use Core\Cards\Domain\ValueObjects\CardId;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\MockObject\Exception;
use PHPUnit\Framework\TestCase;

#[CoversClass(FindCreditCardRequest::class)]
class FindCreditCardRequestTest extends TestCase
{
    /**
     * @throws Exception
     */
    #[Test]
    public function testConstructShouldReturnCorrectly(): void
    {
        $idMock = $this->createMock(CardId::class);

        $request = new FindCreditCardRequest($idMock);
        $this->assertSame($idMock, $request->id());
    }
}
