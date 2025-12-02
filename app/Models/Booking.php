<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;
class Booking extends Model
{
    protected $fillable = ['name','phone','mail','adr_from','adr_to','date_time','passengers'];

    // public function user():BelongsTo{
    //     return $this->belongsTo(User::class);
    // }
}
