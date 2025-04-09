<?php

/**
 * @author Jhonny Andres Gonzalez <jhonnygonzalezf@gmail.com>
 * Date: 2025-04-09 21:00:34
 */

namespace Core\Cards\Domain;

use Core\Cards\Domain\ValueObjects\CardAnnualFee;
use Core\Cards\Domain\ValueObjects\CardClickOutUrl;
use Core\Cards\Domain\ValueObjects\CardFeatures;
use Core\Cards\Domain\ValueObjects\CardId;
use Core\Cards\Domain\ValueObjects\CardInterestRate;
use Core\Cards\Domain\ValueObjects\CardIssuer;
use Core\Cards\Domain\ValueObjects\CardName;

class CreditCard
{
    public function __construct(
        private CardId $id,
        private CardName $name,
        private CardIssuer $issuer,
        private CardAnnualFee $annualFee,
        private CardInterestRate $interestRate,
        private CardClickOutUrl $clickOutUrl,
        private CardFeatures $features = new CardFeatures(),
    ) {
    }

    public function id(): CardId
    {
        return $this->id;
    }

    public function setId(CardId $id): CreditCard
    {
        $this->id = $id;

        return $this;
    }

    public function name(): CardName
    {
        return $this->name;
    }

    public function setName(CardName $name): CreditCard
    {
        $this->name = $name;

        return $this;
    }

    public function issuer(): CardIssuer
    {
        return $this->issuer;
    }

    public function setIssuer(CardIssuer $issuer): CreditCard
    {
        $this->issuer = $issuer;

        return $this;
    }

    private function annualFee(): CardAnnualFee
    {
        return $this->annualFee;
    }

    private function setAnnualFee(CardAnnualFee $annualFee): CreditCard
    {
        $this->annualFee = $annualFee;

        return $this;
    }

    private function interestRate(): CardInterestRate
    {
        return $this->interestRate;
    }

    private function setInterestRate(CardInterestRate $interestRate): CreditCard
    {
        $this->interestRate = $interestRate;

        return $this;
    }

    public function clickOutUrl(): CardClickOutUrl
    {
        return $this->clickOutUrl;
    }

    public function setClickOutUrl(CardClickOutUrl $clickOutUrl): CreditCard
    {
        $this->clickOutUrl = $clickOutUrl;

        return $this;
    }

    public function features(): CardFeatures
    {
        return $this->features;
    }

    public function setFeatures(CardFeatures $features): CreditCard
    {
        $this->features = $features;

        return $this;
    }
}
