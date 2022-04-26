<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Casals extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'data_inici',
        'data_final',
        'n_places',
        'id_ciutat'
    ];

    public function ciutats() {
        return $this->belongsTo(Ciutats::class);
    }

}
