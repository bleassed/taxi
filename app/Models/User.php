<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Booking;

class user extends Model
{
    protected $fillable = ['name','phone','mail'];
    public function booking(){
        return $this->hasMany(Booking::class);
    }
    
}
