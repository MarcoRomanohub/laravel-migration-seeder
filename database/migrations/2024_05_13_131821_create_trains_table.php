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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 70);
            $table->string('slug', 100)->unique();
            $table->string('departure_station', 70);
            $table->string('arrival_station', 70);
            $table->decimal('departure_time', 4, 2)->unsigned();
            $table->decimal('arrival_time', 4, 2)->unsigned();
            $table->integer('code');
            $table->tinyInteger('number_of_carriages');
            $table->boolean('in_time')->default(true);
            $table->boolean('deleted')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
