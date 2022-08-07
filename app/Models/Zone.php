<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    use HasFactory;

    protected $table = 'zones';

    protected $primaryKey = 'id';

    protected $fillable = [
        'zone_name',
        'zone_code',
        'zone_description',
    ];

    public function wards()
    {
        return $this->hasMany(Ward::class);
    }

    public function taxpayers()
    {
        return $this->hasMany(TaxPayer::class);
    }

}

