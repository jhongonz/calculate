<?php

/**
 * @author Jhonny Andres Gonzalez <jhonnygonzalezf@gmail.com>
 * Date: 2025-04-09 21:21:24
 */

namespace Core\Cards\Domain\Contracts;

use Core\Cards\Domain\CreditCard;
use Core\Cards\Domain\ValueObjects\CardAnnualFee;
use Core\Cards\Domain\ValueObjects\CardClickOutUrl;
use Core\Cards\Domain\ValueObjects\CardFeatures;
use Core\Cards\Domain\ValueObjects\CardId;
use Core\Cards\Domain\ValueObjects\CardInterestRate;
use Core\Cards\Domain\ValueObjects\CardIssuer;
use Core\Cards\Domain\ValueObjects\CardName;

interface CreditCardFactoryInterface
{
    public function buildCreditCardFromObject(object $object): CreditCard;

    public function buildCreditCard(
        CardId $id,
        CardName $name,
        CardIssuer $issuer,
        CardAnnualFee $annualFee,
        CardInterestRate $interestRate,
        CardClickOutUrl $clickOutUrl,
    ): CreditCard;

    public function buildId(int $id): CardId;

    public function buildName(string $name): CardName;

    public function buildIssuer(string $issuer): CardIssuer;

    public function buildAnnualFee(float $annualFee = 0.0): CardAnnualFee;

    public function buildClickOutUrl(string $url): CardClickOutUrl;

    public function buildInterestRate(float $interestRate = 0.0): CardInterestRate;

    public function buildFeatures(array $features = []): CardFeatures;
}
