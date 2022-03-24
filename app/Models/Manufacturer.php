<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    use HasFactory;
    protected $fillable = ['man_Name','sales_Info','tech_Support'];
    public function equipment()
    {
        return $this->hasMany(Equipment::class);
        return $this->belongsTo(Equipment::class);// manufacturer

    }


}
