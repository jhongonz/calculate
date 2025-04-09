<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('credit_card', function (Blueprint $table) {
            $table->id('card_id');
            $table->string('name', 100);
            $table->string('issuer', 100);
            $table->float('annual_fee');
            $table->float('interest_rate');
            $table->string('clickout_url', 100);
            $table->string('features', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('credit_card');
    }
};
