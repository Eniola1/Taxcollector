<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classification extends Model
{
    use HasFactory;

    protected $table = 'classifications';

    protected $primaryKey = 'id';

    protected $fillable = [
        'classification_name',
        'class_description',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function revenue()
    {
        return $this->hasMany(Revenue::class);
    }

    public function taxpayers()
    {
        return $this->belongsToMany(TaxPayer::class, 'tax_payer_classifications', 'classification_id', 'tax_payer_id')->withPivot('id');
    }

}

