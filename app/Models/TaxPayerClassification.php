<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaxPayerClassification extends Model
{
    use HasFactory;

    protected $table = 'tax_payer_classifications';

    protected $primaryKey = 'id';

    protected $fillable = [
        'tax_payer_id',
        'classification_id',
    ];

}

