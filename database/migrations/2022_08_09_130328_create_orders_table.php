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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('table_number');
            $table->string('status')->default('Em progresso');
            $table->integer('total_value')->default('000');
            $table->integer('menu_id')->nullable();
            $table->foreignId('establishment_id')
              ->nullable()
              ->constrained('establishments')
              ->cascadeOnDelete();
        });
    } 

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
