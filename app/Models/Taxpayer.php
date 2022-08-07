<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Taxpayer extends Model
{
    use HasFactory;

    protected $table = 'taxpayers';

    function getZones()
    {
        return $this->hasMany('App\Models\Zones');
    }
    
    protected $guarded = [

        // 'title', 'body',
        
    ];

// public function user()
// {
//     return $this->belongsTo(User::class)
// }

public function scopeUnoccupied( $query){
    return $query->where('use', "U");
}

}
