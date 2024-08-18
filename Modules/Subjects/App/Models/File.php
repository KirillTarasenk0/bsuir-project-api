<?php

namespace Modules\Subjects\App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Modules\UserProfile\App\Models\User;

class File extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject_id',
        'user_id',
        'file_path',
        'file_type',
        'points',
    ];

    public function subject(): BelongsTo
    {
        return $this->belongsTo(Subject::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function userPoints(): HasMany
    {
        return $this->hasMany(UserPoint::class);
    }
}
