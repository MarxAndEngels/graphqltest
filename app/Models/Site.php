<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\hasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Site extends Model
{
    use HasFactory;
    protected $table = 'sites';
    protected $guarded = [];

    public function dealer(): BelongsTo{
        return $this->belongsTo(Dealer::class);
    }
    public function user(): hasMany{
        return $this->hasMany(User::class);
    }
}
