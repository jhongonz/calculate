<?php

/**
 * @author Jhonny Andres Gonzalez <jhonnygonzalezf@gmail.com>
 * Date: 2025-04-09 21:25:23
 */

namespace Core\Cards\Application;

use Core\Cards\Domain\Contracts\CreditCardFactoryInterface;
use Core\Cards\Domain\CreditCard;
use Core\Cards\Domain\ValueObjects\CardAnnualFee;
use Core\Cards\Domain\ValueObjects\CardClickOutUrl;
use Core\Cards\Domain\ValueObjects\CardFeatures;
use Core\Cards\Domain\ValueObjects\CardId;
use Core\Cards\Domain\ValueObjects\CardInterestRate;
use Core\Cards\Domain\ValueObjects\CardIssuer;
use Core\Cards\Domain\ValueObjects\CardName;

class CreditCardFactory implements CreditCardFactoryInterface
{
    public function buildId(int $id): CardId
    {
        return new CardId($id);
    }

    public function buildName(string $name): CardName
    {
        return new CardName($name);
    }

    public function buildIssuer(string $issuer): CardIssuer
    {
        return new CardIssuer($issuer);
    }

    /**
     * @param object{
     *     card_id: int,
     *     name: string,
     *     issuer: string,
     *     annual_fee: float,
     *     interest_rate:float,
     *     clickout_url: string,
     *     features: array<string>
     * } $object
     */
    public function buildCreditCardFromObject(object $object): CreditCard
    {
        $card = $this->buildCreditCard(
            $this->buildId($object->card_id),
            $this->buildName($object->name),
            $this->buildIssuer($object->issuer),
            $this->buildAnnualFee($object->annual_fee),
            $this->buildInterestRate($object->interest_rate),
            $this->buildClickOutUrl($object->clickout_url)
        );

        if (!empty($object->features)) {
            $card->setFeatures(
                $this->buildFeatures($object->features)
            );
        }

        return $card;
    }

    public function buildCreditCard(
        CardId $id,
        CardName $name,
        CardIssuer $issuer,
        CardAnnualFee $annualFee,
        CardInterestRate $interestRate,
        CardClickOutUrl $clickOutUrl,
    ): CreditCard {
        return new CreditCard(
            $id,
            $name,
            $issuer,
            $annualFee,
            $interestRate,
            $clickOutUrl
        );
    }

    public function buildAnnualFee(float $annualFee = 0.0): CardAnnualFee
    {
        return new CardAnnualFee($annualFee);
    }

    public function buildClickOutUrl(string $url): CardClickOutUrl
    {
        return new CardClickOutUrl($url);
    }

    public function buildInterestRate(float $interestRate = 0.0): CardInterestRate
    {
        return new CardInterestRate($interestRate);
    }

    /**
     * @param array<string> $features
     */
    public function buildFeatures(array $features = []): CardFeatures
    {
        return new CardFeatures($features);
    }
}
