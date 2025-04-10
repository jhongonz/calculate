<?php

/**
 * @author Jhonny Andres Gonzalez <jhonnygonzalezf@gmail.com>
 * Date: 2025-04-10 22:30:40
 */

namespace Feature\Core\Cards\Application\UseCases\Retrieve;

use Core\Cards\Application\UseCases\Retrieve\FindCreditCardRequest;
use Core\Cards\Application\UseCases\Retrieve\GetCreditCard;
use Core\Cards\Application\UseCases\Retrieve\GetCreditCardRequest;
use Core\Cards\Application\UseCases\UseCaseService;
use Core\Cards\Domain\Contracts\CreditCardRepositoryInterface;
use Core\Cards\Infrastructure\Persistence\EloquentModel\CreditCard;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\MockObject\Exception;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

#[CoversClass(GetCreditCard::class)]
#[CoversClass(UseCaseService::class)]
class GetCreditCardTest extends TestCase
{
    private CreditCardRepositoryInterface|MockObject $repositoryMock;
    private GetCreditCard $useCase;

    protected function setUp(): void
    {
        parent::setUp();

        $this->repositoryMock = $this->createMock(CreditCardRepositoryInterface::class);
        $this->useCase = new GetCreditCard($this->repositoryMock);
    }

    protected function tearDown(): void
    {
        unset($this->repositoryMock, $this->useCase);
        parent::tearDown();
    }

    /**
     * @throws Exception
     * @throws \Exception
     */
    #[Test]
    public function testExecuteShouldReturnCollection(): void
    {
        $search = ['1,2,3'];

        $request = $this->createMock(GetCreditCardRequest::class);
        $request->expects(self::once())
            ->method('search')
            ->willReturn($search);

        $cardMockOne = $this->createMock(CreditCard::class);
        $cardMockTwo = $this->createMock(CreditCard::class);
        $collection = [$cardMockOne, $cardMockTwo];

        $this->repositoryMock->expects(self::once())
            ->method('getAll')
            ->with($search)
            ->willReturn($collection);

        $result = $this->useCase->execute($request);

        $this->assertContainsOnlyInstancesOf(CreditCard::class, $result);
        $this->assertSame($collection, $result);
    }

    /**
     * @throws Exception
     */
    #[Test]
    public function testExecuteShouldReturnException(): void
    {
        $request = $this->createMock(FindCreditCardRequest::class);

        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('Request not valid');

        $this->useCase->execute($request);
    }
}
