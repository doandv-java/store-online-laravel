<?php
declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up(): void
    {
        // https://api.postcodes.io/random/postcodes
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');

            $table->string('house');    //123456
            $table->string('street');   //Street name
            $table->string('parish')->nullable();   //Some village/town
            $table->string('ward')->nullable(); // Town
            $table->string('district')->nullable(); // Greater area
            $table->string('county')->nullable();// Country
            $table->string('postcode');
            $table->string('country');

            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('locations');
    }
};
