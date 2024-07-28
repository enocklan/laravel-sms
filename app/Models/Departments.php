<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

/**
 * @method static count()
 */
class Departments extends Model
{
    use HasFactory,HasUuids;

    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'name',
        'HOD',
        'year_started',
        'student_count'
    ];

    protected static function booted()
    {
        static::creating(function ($department) {
            $department->id = (string) Str::uuid();
        });
    }

    public function students(): HasMany
    {
        return $this->hasMany(User::class);
    }

//    public function getStudentCountAttribute(): int
//    {
//        return $this->students()->count();
//    }
}
