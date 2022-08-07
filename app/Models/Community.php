<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
    use HasFactory;

    protected $table = 'communities';

    protected $primaryKey = 'id';

    protected $fillable = [
        'community_name',
        'community_code',
        'ward_id',
        'community_description',
    ];

    public function taxpayers()
    {
        return $this->hasMany(TaxPayer::class);
    }

    public function streets()
    {
        return $this->hasMany(StreetNaming::class);
    }
}

