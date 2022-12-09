<?php
declare(strict_types=1);
namespace Domains\Catalog\Models;

use Database\Factories\RangeFactory;
use Domains\Catalog\Models\Builders\RangeBuilder;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use JustSteveKing\KeyFactory\Models\Concerns\HasKey;

class Range extends Model
{
    use HasKey;
    use HasFactory;

    public  $timestamps=false;

    protected $fillable=[
        'key',
        'name',
        'description',
        'active'
    ];

    protected $casts=[
        'active'=>'boolean'
    ];


    public function  products():HasMany
    {
        return $this->hasMany(Product::class,'range_id');
    }



    public  function  newEloquentBuilder($query):Builder
    {
        return new RangeBuilder($query);
    }


    protected static function newFactory(): Factory
    {
        return new RangeFactory();
    }
}
