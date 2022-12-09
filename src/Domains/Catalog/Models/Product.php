<?php
declare(strict_types=1);
namespace Domains\Catalog\Models;

use Database\Factories\ProductFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use JustSteveKing\KeyFactory\Models\Concerns\HasKey;

class Product extends Model
{
    use HasKey;
    use HasFactory;

    protected  $fillable=[
        'key',
        'name',
        'description',
        'cost',
        'retail',
        'active',
        'vat',
        'category_id',
        'range_id',
    ];

    protected  $casts=[
        'active'=>'boolean',
        'vat'=>'boolean',
    ];

    protected static function newFactory(): Factory
    {
        return new ProductFactory();
    }
}
