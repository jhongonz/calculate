<?php
/**
 * @author Jhonny Andres Gonzalez <jhonnygonzalezf@gmail.com>
 * Date: 2025-04-11 20:38:48
 */

namespace Feature\Core\Cards\Infrastructure\Services;

use Core\Cards\Application\UseCases\Retrieve\FindCreditCard;
use Core\Cards\Application\UseCases\Retrieve\FindCreditCardRequest;
use Core\Cards\Application\UseCases\Retrieve\GetCreditCard;
use Core\Cards\Application\UseCases\Retrieve\GetCreditCardRequest;
use Core\Cards\Domain\Contracts\CreditCardFactoryInterface;
use Core\Cards\Domain\CreditCard;
use Core\Cards\Domain\ValueObjects\CardId;
use Core\Cards\Infrastructure\Services\CreditCardManager;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\MockObject\Exception;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

#[CoversClass(CreditCardManager::class)]
class CreditCardManagerTest extends TestCase
{
    private CreditCardFactoryInterface|MockObject $factoryMock;
    private GetCreditCard|MockObject $getCreditCardMock;
    private FindCreditCard|MockObject $findCreditCardMock;
    private CreditCardManager $cardManager;

    /**
     * @throws Exception
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->factoryMock = $this->createMock(CreditCardFactoryInterface::class);
        $this->getCreditCardMock = $this->createMock(GetCreditCard::class);
        $this->findCreditCardMock = $this->createMock(FindCreditCard::class);
        $this->cardManager = new CreditCardManager(
            $this->factoryMock,
            $this->getCreditCardMock,
            $this->findCreditCardMock
        );
    }

    protected function tearDown(): void
    {
        unset(
            $this->cardManager,
            $this->factoryMock,
            $this->getCreditCardMock,
            $this->findCreditCardMock
        );
        parent::tearDown();
    }

    /**
     * @throws Exception
     * @throws \Exception
     */
    #[Test]
    public function testGetCreditCardShouldReturnArray(): void
    {
        $dataMock = [
            $this->createMock(CreditCard::class),
            $this->createMock(CreditCard::class)
        ];

        $request = new GetCreditCardRequest();
        $this->getCreditCardMock->expects(self::once())
            ->method('execute')
            ->with($request)
            ->willReturn($dataMock);

        $request = $this->cardManager->getCreditCard();
        $this->assertSame($dataMock, $request);
    }

    /**
     * @throws Exception
     * @throws \Exception
     */
    #[Test]
    public function testFindCreditCardShouldReturnObject(): void
    {
        $id = 1;
        $idMock = $this->createMock(CardId::class);

        $this->factoryMock->expects(self::once())
            ->method('buildId')
            ->with($id)
            ->willReturn($idMock);

        $cardMock = $this->createMock(CreditCard::class);
        $request = new FindCreditCardRequest($idMock);

        $this->findCreditCardMock->expects(self::once())
            ->method('execute')
            ->with($request)
            ->willReturn($cardMock);

        $result = $this->cardManager->findCreditCard($id);

        $this->assertInstanceOf(CreditCard::class, $result);
        $this->assertSame($cardMock, $result);
    }

    /**
     * @throws Exception
     * @throws \Exception
     */
    #[Test]
    public function testFindCreditCardShouldReturnNull(): void
    {
        $id = 1;
        $idMock = $this->createMock(CardId::class);

        $this->factoryMock->expects(self::once())
            ->method('buildId')
            ->with($id)
            ->willReturn($idMock);

        $request = new FindCreditCardRequest($idMock);

        $this->findCreditCardMock->expects(self::once())
            ->method('execute')
            ->with($request)
            ->willReturn(null);

        $result = $this->cardManager->findCreditCard($id);
        $this->assertNull($result);
    }
}
