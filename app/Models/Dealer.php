<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\hasMany;

class Dealer extends Model
{
    use HasFactory;
    protected $table = 'dealers';
    protected $guarded = false;
    public $timestamps = false;

    public function site(){
        return $this->hasMany(Site::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
