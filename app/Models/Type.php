<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;
    protected $fillable = ['category'];
    public function equipment()
    {
        return $this->hasMany(Equipment::class);
        return $this->belongsTo(Equipment::class);
    }
}
