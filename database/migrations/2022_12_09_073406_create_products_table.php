<?php
declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up():void
    {
        Schema::create('products', function (Blueprint $table) {
            //identifier
            $table->id();
            $table->string('key')->unique();

            // Information
            $table->string('name');
            $table->mediumText('description');
            $table->unsignedBigInteger('cost');
            $table->unsignedBigInteger('retail');

            //Boolean flag
            $table->boolean('active')->default(true);
            $table->boolean('vat')->default(config('shop.vat'));

            //Json columns


            //Relationship
            $table->foreignId('category_id')->nullable()->index()->constrained()->nullOnDelete();
            $table->foreignId('range_id')->nullable()->index()->constrained()->nullOnDelete();

            $table->timestamps();
        });
    }


    public function down():void
    {
        Schema::dropIfExists('products');
    }
};
