<?php
declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up(): void
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('label');
            $table->boolean('billing')->default(false);
            $table->foreignId('user_id')->nullable()->index();
            $table->foreignId('location_id')->nullable()->index();


            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
