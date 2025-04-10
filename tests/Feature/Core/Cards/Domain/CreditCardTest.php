<?php

/**
 * @author Jhonny Andres Gonzalez <jhonnygonzalezf@gmail.com>
 * Date: 2025-04-10 22:57:43
 */

namespace Feature\Core\Cards\Domain;

use Core\Cards\Domain\CreditCard;
use Core\Cards\Domain\ValueObjects\CardAnnualFee;
use Core\Cards\Domain\ValueObjects\CardClickOutUrl;
use Core\Cards\Domain\ValueObjects\CardFeatures;
use Core\Cards\Domain\ValueObjects\CardId;
use Core\Cards\Domain\ValueObjects\CardInterestRate;
use Core\Cards\Domain\ValueObjects\CardIssuer;
use Core\Cards\Domain\ValueObjects\CardName;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\MockObject\Exception;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

#[CoversClass(CreditCard::class)]
class CreditCardTest extends TestCase
{
    private CardId|MockObject $idMock;
    private CardName|MockObject $nameMock;
    private CardIssuer|MockObject $issuerMock;
    private CardAnnualFee|MockObject $annualFeeMock;
    private CardInterestRate|MockObject $interestRateMock;
    private CardClickOutUrl|MockObject $clickOutUrlMock;

    private CreditCard $domain;

    /**
     * @throws Exception
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->idMock = $this->createMock(CardId::class);
        $this->nameMock = $this->createMock(CardName::class);
        $this->issuerMock = $this->createMock(CardIssuer::class);
        $this->annualFeeMock = $this->createMock(CardAnnualFee::class);
        $this->interestRateMock = $this->createMock(CardInterestRate::class);
        $this->clickOutUrlMock = $this->createMock(CardClickOutUrl::class);

        $this->domain = new CreditCard(
            $this->idMock,
            $this->nameMock,
            $this->issuerMock,
            $this->annualFeeMock,
            $this->interestRateMock,
            $this->clickOutUrlMock
        );
    }

    protected function tearDown(): void
    {
        unset(
            $this->domain,
            $this->idMock,
            $this->nameMock,
            $this->issuerMock,
            $this->annualFeeMock,
            $this->interestRateMock,
            $this->clickOutUrlMock
        );
        parent::tearDown();
    }

    #[Test]
    public function testIdShouldReturnValueCorrectly(): void
    {
        $result = $this->domain->id();
        $this->assertSame($this->idMock, $result);
    }

    /**
     * @throws Exception
     */
    #[Test]
    public function testSetIdShouldChangeValueAndReturnSelf(): void
    {
        $idMock = $this->createMock(CardId::class);
        $result = $this->domain->setId($idMock);

        $this->assertSame($this->domain, $result);
        $this->assertSame($idMock, $this->domain->id());
    }

    #[Test]
    public function testNameShouldReturnValueCorrectly(): void
    {
        $result = $this->domain->name();
        $this->assertSame($this->nameMock, $result);
    }

    /**
     * @throws Exception
     */
    #[Test]
    public function testSetNameShouldChangeValueAndReturnSelf(): void
    {
        $nameMock = $this->createMock(CardName::class);
        $result = $this->domain->setName($nameMock);

        $this->assertSame($this->domain, $result);
        $this->assertSame($nameMock, $this->domain->name());
    }

    #[Test]
    public function testIssuerShouldReturnValueCorrectly(): void
    {
        $result = $this->domain->issuer();
        $this->assertSame($this->issuerMock, $result);
    }

    /**
     * @throws Exception
     */
    #[Test]
    public function testSetIssuerShouldChangeValueAndReturnSelf(): void
    {
        $issuerMock = $this->createMock(CardIssuer::class);
        $result = $this->domain->setIssuer($issuerMock);

        $this->assertSame($this->domain, $result);
        $this->assertSame($issuerMock, $this->domain->issuer());
    }

    #[Test]
    public function testAnnualFeeShouldReturnValueCorrectly(): void
    {
        $result = $this->domain->annualFee();
        $this->assertSame($this->annualFeeMock, $result);
    }

    /**
     * @throws Exception
     */
    #[Test]
    public function testSetAnnualFeeShouldChangeValueAndReturnSelf(): void
    {
        $annualFeeMock = $this->createMock(CardAnnualFee::class);
        $result = $this->domain->setAnnualFee($annualFeeMock);

        $this->assertSame($this->domain, $result);
        $this->assertSame($annualFeeMock, $this->domain->annualFee());
    }

    #[Test]
    public function testInterestRateShouldReturnValueCorrectly(): void
    {
        $result = $this->domain->interestRate();
        $this->assertSame($this->interestRateMock, $result);
    }

    /**
     * @throws Exception
     */
    #[Test]
    public function testSetInterestRateShouldChangeValueAndReturnSelf(): void
    {
        $interestRateMock = $this->createMock(CardInterestRate::class);
        $result = $this->domain->setInterestRate($interestRateMock);

        $this->assertSame($this->domain, $result);
        $this->assertSame($interestRateMock, $this->domain->interestRate());
    }

    #[Test]
    public function testClickOutUrlShouldReturnValueCorrectly(): void
    {
        $result = $this->domain->clickOutUrl();
        $this->assertSame($this->clickOutUrlMock, $result);
    }

    /**
     * @throws Exception
     */
    #[Test]
    public function testSetClickOutUrlShouldChangeValueAndReturnSelf(): void
    {
        $clickOutUrl = $this->createMock(CardClickOutUrl::class);
        $result = $this->domain->setClickOutUrl($clickOutUrl);

        $this->assertSame($this->domain, $result);
        $this->assertSame($clickOutUrl, $this->domain->clickOutUrl());
    }

    #[Test]
    public function testFeaturesShouldReturnValueCorrectly(): void
    {
        $result = $this->domain->features();

        $this->assertInstanceOf(CardFeatures::class, $result);
        $this->assertSame([], $result->value());
    }

    /**
     * @throws Exception
     */
    #[Test]
    public function testSetFeatureShouldChangeValueAndReturnSelf(): void
    {
        $features = $this->createMock(CardFeatures::class);
        $result = $this->domain->setFeatures($features);

        $this->assertSame($this->domain, $result);
        $this->assertSame($features, $this->domain->features());
    }
}
