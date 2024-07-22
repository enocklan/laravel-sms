<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;

/**
 * @method static count()
 */
class Teacher extends Model
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes, HasUuids;

    protected $keyType = 'string';
    public $incrementing = false;

    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted(): void
    {
        static::creating(function ($admin) {
            if (empty($admin->id)) {
                $admin->id = (string) Str::uuid();
            }
        });
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'phoneNumber',
        'password',
        'is_active',
        'is_otp_verified',
        'has_to_change_password',
        'email_verified_at',
        'employee_id',
        'department',
        'date_of_employment',
        'address',
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
     * Automatically hash the password when setting it.
     *
     * @param string $value
     * @return void
     */
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = hash::make($value);
    }

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'date_of_birth' => 'date',
    ];

    /**
     * Get the profile picture URL.
     *
     * @return string|null
     */
    public function getProfilePictureUrlAttribute(): ?string
    {
        return $this->profile_picture ? asset('storage/' . $this->profile_picture) : null;
    }
}
