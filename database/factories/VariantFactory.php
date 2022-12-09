<?php
declare(strict_types=1);

namespace Database\Factories;

use Domains\Catalog\Models\Variant;
use Illuminate\Database\Eloquent\Factories\Factory;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\Domains\Catalog\Models\Variant>
 */
class VariantFactory extends Factory
{
    protected $model= Variant::class;
    public function definition():array
    {
        return [
            //
        ];
    }
}
