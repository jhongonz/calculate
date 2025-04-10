<?php

/**
 * @author Jhonny Andres Gonzalez <jhonnygonzalezf@gmail.com>
 * Date: 2025-04-10 11:23:02
 */

namespace Feature\Core\Cards\Application;

use Core\Cards\Application\CreditCardFactory;
use Core\Cards\Domain\CreditCard;
use Core\Cards\Domain\ValueObjects\CardAnnualFee;
use Core\Cards\Domain\ValueObjects\CardClickOutUrl;
use Core\Cards\Domain\ValueObjects\CardFeatures;
use Core\Cards\Domain\ValueObjects\CardId;
use Core\Cards\Domain\ValueObjects\CardInterestRate;
use Core\Cards\Domain\ValueObjects\CardIssuer;
use Core\Cards\Domain\ValueObjects\CardName;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\MockObject\Exception;
use PHPUnit\Framework\TestCase;
use Tests\Feature\Core\Cards\Application\DataProvider\CreditCardFactoryDataProvider;

#[CoversClass(CreditCardFactory::class)]
class CreditCardFactoryTest extends TestCase
{
    private CreditCardFactory $factory;

    protected function setUp(): void
    {
        parent::setUp();
        $this->factory = new CreditCardFactory();
    }

    protected function tearDown(): void
    {
        unset($this->factory);
        parent::tearDown();
    }

    #[Test]
    public function testBuildIdShouldReturnObject(): void
    {
        $id = 10;
        $result = $this->factory->buildId($id);

        $this->assertInstanceOf(CardId::class, $result);
        $this->assertSame($id, $result->value());
    }

    #[Test]
    public function testBuildNameShouldReturnObject(): void
    {
        $name = 'sandbox';
        $result = $this->factory->buildName($name);

        $this->assertInstanceOf(CardName::class, $result);
        $this->assertSame($name, $result->value());
    }

    #[Test]
    public function testBuildIssuerShouldReturnObject(): void
    {
        $issuer = 'sandbox issuer';
        $result = $this->factory->buildIssuer($issuer);

        $this->assertInstanceOf(CardIssuer::class, $result);
        $this->assertSame($issuer, $result->value());
    }

    #[Test]
    #[DataProviderExternal(CreditCardFactoryDataProvider::class, 'annualFeeProvider')]
    public function testBuildAnnualFeeShouldReturnObject(?float $annualFee): void
    {
        if (!empty($annualFee)) {
            $result = $this->factory->buildAnnualFee($annualFee);

            $this->assertSame($annualFee, $result->value());
        } else {
            $result = $this->factory->buildAnnualFee();

            $this->assertSame(0.0, $result->value());
        }

        $this->assertInstanceOf(CardAnnualFee::class, $result);
    }

    #[Test]
    public function testBuildClickOutUrlShouldReturnObject(): void
    {
        $url = 'http://localhost';
        $result = $this->factory->buildClickOutUrl($url);

        $this->assertInstanceOf(CardClickOutUrl::class, $result);
        $this->assertSame($url, $result->value());
    }

    #[Test]
    #[DataProviderExternal(CreditCardFactoryDataProvider::class, 'interestRateProvider')]
    public function testBuildInterestRateShouldReturnObject(?float $interestRate): void
    {
        if (!empty($interestRate)) {
            $result = $this->factory->buildInterestRate($interestRate);

            $this->assertSame($interestRate, $result->value());
        } else {
            $result = $this->factory->buildInterestRate();

            $this->assertSame(0.0, $result->value());
        }

        $this->assertInstanceOf(CardInterestRate::class, $result);
    }

    #[Test]
    #[DataProviderExternal(CreditCardFactoryDataProvider::class, 'featuresProvider')]
    public function testBuildFeaturesShouldReturnObject(?array $features): void
    {
        if (!empty($features)) {
            $result = $this->factory->buildFeatures($features);

            $this->assertSame($features, $result->value());
        } else {
            $result = $this->factory->buildFeatures();

            $this->assertSame([], $result->value());
        }

        $this->assertInstanceOf(CardFeatures::class, $result);
    }

    /**
     * @throws Exception
     */
    #[Test]
    #[DataProviderExternal(CreditCardFactoryDataProvider::class, 'objectProvider')]
    public function testBuildCreditCardFromObjectShouldReturnObject(object $object): void
    {
        $factoryMock = $this->getMockBuilder(CreditCardFactory::class)
            ->onlyMethods([
                'buildCreditCard',
                'buildId',
                'buildName',
                'buildIssuer',
                'buildAnnualFee',
                'buildInterestRate',
                'buildClickOutUrl',
                'buildFeatures',
            ])
            ->getMock();

        $idMock = $this->createMock(CardId::class);
        $factoryMock->expects(self::once())
            ->method('buildId')
            ->with($object->card_id)
            ->willReturn($idMock);

        $nameMock = $this->createMock(CardName::class);
        $factoryMock->expects(self::once())
            ->method('buildName')
            ->with($object->name)
            ->willReturn($nameMock);

        $issuerMock = $this->createMock(CardIssuer::class);
        $factoryMock->expects(self::once())
            ->method('buildIssuer')
            ->with($object->issuer)
            ->willReturn($issuerMock);

        $annualFeeMock = $this->createMock(CardAnnualFee::class);
        $factoryMock->expects(self::once())
            ->method('buildAnnualFee')
            ->with($object->annual_fee)
            ->willReturn($annualFeeMock);

        $interestRateMock = $this->createMock(CardInterestRate::class);
        $factoryMock->expects(self::once())
            ->method('buildInterestRate')
            ->with($object->interest_rate)
            ->willReturn($interestRateMock);

        $clickOutMock = $this->createMock(CardClickOutUrl::class);
        $factoryMock->expects(self::once())
            ->method('buildClickOutUrl')
            ->with($object->clickout_url)
            ->willReturn($clickOutMock);

        $cardMock = $this->createMock(CreditCard::class);
        $factoryMock->expects(self::once())
            ->method('buildCreditCard')
            ->with(
                $idMock,
                $nameMock,
                $issuerMock,
                $annualFeeMock,
                $interestRateMock,
                $clickOutMock
            )
            ->willReturn($cardMock);

        $featureMock = $this->createMock(CardFeatures::class);
        $factoryMock->expects(self::once())
            ->method('buildFeatures')
            ->with($object->features)
            ->willReturn($featureMock);

        $cardMock->expects(self::once())
            ->method('setFeatures')
            ->with($featureMock)
            ->willReturnSelf();

        $result = $factoryMock->buildCreditCardFromObject($object);

        $this->assertInstanceOf(CreditCard::class, $result);
        $this->assertSame($cardMock, $result);
    }

    /**
     * @throws Exception
     */
    #[Test]
    public function testBuildCreditCardShouldReturnObject(): void
    {
        $idMock = $this->createMock(CardId::class);
        $nameMock = $this->createMock(CardName::class);
        $issuerMock = $this->createMock(CardIssuer::class);
        $annualFeeMock = $this->createMock(CardAnnualFee::class);
        $interestRateMock = $this->createMock(CardInterestRate::class);
        $clickOutUrlMock = $this->createMock(CardClickOutUrl::class);

        $result = $this->factory->buildCreditCard(
            $idMock,
            $nameMock,
            $issuerMock,
            $annualFeeMock,
            $interestRateMock,
            $clickOutUrlMock
        );

        $this->assertInstanceOf(CreditCard::class, $result);
    }
}
