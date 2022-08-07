<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrivateResident extends Model
{
    use HasFactory;

    protected $table = 'private_residentials';

    protected $primaryKey = 'id';

    protected $fillable = [
        'private_resident_name',
        'private_resident_description',
    ];

}

