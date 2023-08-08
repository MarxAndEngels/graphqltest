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

    public function site(){
        return $this->hasMany(Site::class);
    }
}
