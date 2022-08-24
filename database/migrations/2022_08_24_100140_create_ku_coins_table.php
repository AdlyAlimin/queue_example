<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ku_coins', function (Blueprint $table) {
            $table->id();
            $table->string('time');
            $table->string('symbol');
            $table->decimal('buy', 8, 3);
            $table->decimal('sell', 8, 3);
            $table->decimal('change_rate', 8, 3);
            $table->decimal('change_price', 8, 3);
            $table->decimal('high', 8, 3);
            $table->decimal('low', 8, 3);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ku_coins');
    }
};
