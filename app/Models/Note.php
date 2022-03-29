<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;
    protected $fillable = ['note','contact'];
    public function equipment()
    {
        return $this->hasMany(Equipment::class);
        return $this->belongsTo(Equipment::class);
    }
}
