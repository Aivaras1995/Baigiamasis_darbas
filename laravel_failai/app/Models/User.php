<?php

namespace App\Models;

use Carbon\Carbon;
 use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class User
 * @package App\Models
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property Carbon $email_verified_at
 * @property string $password
 * @property string $role
 * @property string $remember_token
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;
    public const ROLE_ADMIN   = 'admin';
    public const ROLE_USER    = 'user';
    public const ROLE_MANAGER = 'manager';
    public const ROLE_PM      = 'prod_manager';

    public const ROLES = [
        self::ROLE_ADMIN,
        self::ROLE_USER,
        self::ROLE_MANAGER,
        self::ROLE_PM,
    ];

    public const ROLE_DEFAULT = self::ROLE_USER;


    protected  $guarded = [
        'role',
    ];
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function person(): HasMany
    {
        return $this->hasMany(Person::class);
    }

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }
    public function addresses(): HasMany
    {
        return $this->hasMany(Address::class);
    }
    public function isAdmin(): bool
    {
        return $this->role === self::ROLE_ADMIN;//tikrina, ar dabartinio vartotojo rolė yra lygi self::ROLE_ADMIN konstantai. Jei taip, tai reiškia, kad vartotojas yra administratorius,
        // ir funkcija grąžina true. Priešingu atveju, grąžina false.
    }

    public function isManager(): bool
    {
        return $this->role === self::ROLE_MANAGER;
    }

    public function isPM(): bool
    {
        return $this->role === self::ROLE_PM;
    }

    public function isPersonnel(): bool
    {
        return in_array($this->role,
            [self::ROLE_ADMIN, self::ROLE_MANAGER, self::ROLE_PM]);
    }
    public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }
}
