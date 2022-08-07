<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaxPayerRevenue extends Model
{
    use HasFactory;

    protected $table = 'tax_payer_revenues';

    protected $primaryKey = 'id';

    protected $fillable = [
        'tax_payer_id',
        'revenue_id',
    ];
    
}

