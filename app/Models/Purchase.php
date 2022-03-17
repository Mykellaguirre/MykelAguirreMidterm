<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;
    protected $fillable = ['quantity','created_at','employee'];
    public function equipment()
    {
        return $this->hasMany(Equipment::class);
    }
}
