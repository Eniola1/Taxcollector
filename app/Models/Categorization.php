<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorization extends Model
{
    use HasFactory;

    protected $table = 'categorizations';

    protected $primaryKey = 'id';

    protected $fillable = [
        'category_name',
        'category_description',
    ];
}

