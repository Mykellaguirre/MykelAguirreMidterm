<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    use HasFactory;

    function manufacturer() {
        return $this->belongsTo(Manufacturer::class);
    }
    function note() {
        return $this->belongsTo(Note::class);
    }
    function purchase() {
        return $this->belongsTo(Purchase::class);
    }
    function type() {
        return $this->belongsTo(Type::class);
    }
    
}
