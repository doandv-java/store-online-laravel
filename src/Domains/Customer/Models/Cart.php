<?php
declare(strict_types=1);
namespace Domains\Customer\Models;

use Database\Factories\CartFactory;
use Domains\Customer\States\Statuses\CartStatus;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use JustSteveKing\KeyFactory\Models\Concerns\HasKey;

class Cart extends Model
{
    use HasFactory;
    use HasKey;

    protected $fillable=[
        'key',
        'status',
        'coupon',
        'total',
        'reduction',
        'user_id'
    ];
    protected $casts=[
        'status'=>CartStatus::class.':nullable',
    ];

   public function user():BelongsTo{
       return $this->belongsTo(User::class,'user_id');
   }

    protected static function newFactory():Factory
    {
        return CartFactory::new();
    }
}
