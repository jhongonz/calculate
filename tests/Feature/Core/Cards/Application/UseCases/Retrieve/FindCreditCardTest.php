<?php

/**
 * @author Jhonny Andres Gonzalez <jhonnygonzalezf@gmail.com>
 * Date: 2025-04-10 22:16:19
 */

namespace Feature\Core\Cards\Application\UseCases\Retrieve;

use Core\Cards\Application\UseCases\Retrieve\FindCreditCard;
use Core\Cards\Application\UseCases\Retrieve\FindCreditCardRequest;
use Core\Cards\Application\UseCases\Retrieve\GetCreditCardRequest;
use Core\Cards\Application\UseCases\UseCaseService;
use Core\Cards\Domain\Contracts\CreditCardRepositoryInterface;
use Core\Cards\Domain\CreditCard;
use Core\Cards\Domain\ValueObjects\CardId;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\MockObject\Exception;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

#[CoversClass(FindCreditCard::class)]
#[CoversClass(UseCaseService::class)]
class FindCreditCardTest extends TestCase
{
    private CreditCardRepositoryInterface|MockObject $repositoryMock;

    private FindCreditCard $useCase;

    /**
     * @throws Exception
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->repositoryMock = $this->createMock(CreditCardRepositoryInterface::class);
        $this->useCase = new FindCreditCard(
            $this->repositoryMock
        );
    }

    protected function tearDown(): void
    {
        unset($this->useCase, $this->repositoryMock);
        parent::tearDown();
    }

    /**
     * @throws Exception
     * @throws \Exception
     */
    #[Test]
    public function testExecuteShouldReturnObject(): void
    {
        $idMock = $this->createMock(CardId::class);

        $request = $this->createMock(FindCreditCardRequest::class);
        $request->expects(self::once())
            ->method('id')
            ->willReturn($idMock);

        $cardMock = $this->createMock(CreditCard::class);
        $this->repositoryMock->expects(self::once())
            ->method('findById')
            ->with($idMock)
            ->willReturn($cardMock);

        $result = $this->useCase->execute($request);

        $this->assertInstanceOf(CreditCard::class, $result);
        $this->assertSame($cardMock, $result);
    }

    /**
     * @throws Exception
     */
    #[Test]
    public function testExecuteShouldReturnException(): void
    {
        $request = $this->createMock(GetCreditCardRequest::class);

        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('Request not valid');

        $this->useCase->execute($request);
    }
}
