<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciutats extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'n_habitants'
    ];

    public function casals() {
        return $this->hasMany(Casals::class);
    }

}
