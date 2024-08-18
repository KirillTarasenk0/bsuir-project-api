<?php

namespace Modules\Advertisements\App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\UserProfile\App\Models\User;

class Advertisement extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'ad_type',
        'title',
        'description',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
