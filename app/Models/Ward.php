<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    use HasFactory;

    protected $table = 'wards';

    protected $primaryKey = 'id';

    protected $fillable = [
        'ward_name',
        'ward_code',
        'zone_id',
        'ward_description',
    ];

    public function zone()
    {
        return $this->belongsTo(Zone::class);
    }

    public function taxpayers()
    {
        return $this->hasMany(TaxPayer::class);
    }

    public function streets()
    {
        return $this->hasMany(TaxPayer::class);
    }

}
