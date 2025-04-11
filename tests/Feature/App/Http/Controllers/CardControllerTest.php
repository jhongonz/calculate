<?php

/**
 * @author Jhonny Andres Gonzalez <jhonnygonzalezf@gmail.com>
 * Date: 2025-04-11 21:08:03
 */

namespace Tests\Feature\App\Http\Controllers;

use App\Http\Controllers\CardController;
use Core\Cards\Domain\Contracts\CreditCardManagerInterface;
use Core\Cards\Domain\CreditCard;
use Illuminate\Contracts\View\View;
use Illuminate\View\Factory;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\MockObject\Exception;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

#[CoversClass(CardController::class)]
class CardControllerTest extends TestCase
{
    private Factory|MockObject $viewMock;
    private CreditCardManagerInterface|MockObject $cardManagerMock;
    private CardController $controller;

    /**
     * @throws Exception
     */
    protected function setUp(): void
    {
        parent::setUp();
        $this->viewMock = $this->createMock(Factory::class);
        $this->cardManagerMock = $this->createMock(CreditCardManagerInterface::class);
        $this->controller = new CardController(
            $this->viewMock,
            $this->cardManagerMock
        );
    }

    protected function tearDown(): void
    {
        unset(
            $this->viewMock,
            $this->cardManagerMock,
            $this->controller
        );
        parent::tearDown();
    }

    /**
     * @throws Exception
     */
    #[Test]
    public function testIndexShouldReturnString(): void
    {
        $html = '<a>This is a test</a>>';
        $cardsMock = [
            $this->createMock(CreditCard::class),
            $this->createMock(CreditCard::class),
        ];

        $this->cardManagerMock->expects(self::once())
            ->method('getCreditCard')
            ->willReturn($cardsMock);

        $viewMock = $this->createMock(View::class);
        $viewMock->expects(self::once())
            ->method('with')
            ->with('cards', $cardsMock)
            ->willReturnSelf();

        $viewMock->expects(self::once())
            ->method('render')
            ->willReturn($html);

        $this->viewMock->expects(self::once())
            ->method('make')
            ->with('cards.comparator')
            ->willReturn($viewMock);

        $result = $this->controller->index();

        $this->assertSame($html, $result);
        $this->assertIsString($result);
    }
}
