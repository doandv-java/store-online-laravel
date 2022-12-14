<?php
declare(strict_types=1);

namespace Domains\Customer\Models;

use Database\Factories\UserFactory;
use Domains\Shared\Models\Concerns\HasUuid;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasUuid;
    use Notifiable;
    use HasFactory;
    use HasApiTokens;

    protected $fillable = [
        'uuid',
        'first_name',
        'last_name',
        'name',
        'email',
        'password',
        'billing_id',
        'shipping_id'
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function shipping(): BelongsTo
    {
        return $this->belongsTo(
            Address::class, 'shipping_id');
    }

    public function billing(): BelongsTo
    {
        return $this->belongsTo(
            Address::class, 'billing_id');
    }


    public function addresses(): HasMany
    {
        return $this->hasMany(Address::class, 'user_id');
    }

    public function cart():HasOne{
        return $this->hasOne(Cart::class,'user_id');
    }

    protected static function newFactory(): Factory
    {
        return UserFactory::new();
    }

}
