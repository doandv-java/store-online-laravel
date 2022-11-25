<?php
declare(strict_types=1);

namespace Database\Factories;

use App\Models\Address;
use Illuminate\Database\Eloquent\Factories\Factory;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    protected $model= Address::class;
    public function definition():array
    {
        return [
            //
        ];
    }
}
