<?php

/**
 * @author Jhonny Andres Gonzalez <jhonnygonzalezf@gmail.com>
 * Date: 2025-04-10 20:56:38
 */

namespace Tests\Feature\Core\Cards\Application\DataProvider;

final class CreditCardFactoryDataProvider
{
    /**
     * @return array<int array<string, mixed>>
     */
    public static function annualFeeProvider(): array
    {
        return [
            [
                'annualFee' => 12.5,
            ],
            [
                'annualFee' => null,
            ],
        ];
    }

    /**
     * @return array<int array<string, mixed>>
     */
    public static function interestRateProvider(): array
    {
        return [
            [
                'interestRate' => 12.5,
            ],
            [
                'interestRate' => null,
            ],
        ];
    }

    /**
     * @return array<int array<string, mixed>>
     */
    public static function featuresProvider(): array
    {
        return [
            [
                'features' => ['one, two,three'],
            ],
            [
                'features' => null,
            ],
        ];
    }

    /**
     * @return array<int array<string, mixed>>
     */
    public static function objectProvider(): array
    {
        return [
            [
                'object' => self::getObjectMock(),
            ],
        ];
    }

    private static function getObjectMock(): object
    {
        $object = new \stdClass();
        $object->card_id = 1;
        $object->name = 'name';
        $object->issuer = 'sandbox bank';
        $object->annual_fee = 12.8;
        $object->interest_rate = 15.7;
        $object->clickout_url = 'http://localhost';
        $object->features = ['one', 'two', 'three'];

        return $object;
    }
}
