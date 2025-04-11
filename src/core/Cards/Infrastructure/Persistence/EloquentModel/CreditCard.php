<?php

namespace Core\Cards\Infrastructure\Persistence\EloquentModel;

use Illuminate\Database\Eloquent\Model;

class CreditCard extends Model
{
    protected $table = 'credit_card';

    protected $primaryKey = 'card_id';

    protected $attributes = [
        'features' => '[]',
        'annual_feel' => 0.0,
        'interest_rate' => 0.0,
    ];

    protected $fillable = [
        'card_id',
        'name',
        'issuer',
        'annual_feel',
        'interest_rate',
        'clickout_url',
        'features',
    ];
}
