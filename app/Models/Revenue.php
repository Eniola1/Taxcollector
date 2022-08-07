<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Revenue extends Model
{
    use HasFactory;

    protected $table = 'revenues';

    protected $primaryKey = 'id';

    protected $fillable = [
        'revenue_name',
        'code',
        'classification_id',
        'tax_amount',
        'revenue_description',
    ];

    public function taxpayers()
    {
        return $this->belongsToMany(Taxpayer::class, 'tax_payer_revenues', 'revenue_id', 'tax_payer_id');
    }

    public function classification()
    {
        return $this->belongsTo(Classification::class);
    }

}

