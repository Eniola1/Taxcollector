<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StreetNaming extends Model
{
    use HasFactory;

    protected $table = 'street_namings';

    protected $primaryKey = 'id';

    protected $fillable = [
        'street_name',
        'user_id',
        'phone',
        'ward_id',
        'community_id',
        'user_ip_address',
        'road_state',
        'drainage',
        'latitude',
        'longitude',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function ward()
    {
        return $this->belongsTo(Ward::class);
    }

    public function community()
    {
        return $this->belongsTo(Community::class);
    }

}

