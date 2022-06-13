<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HardwareStock extends Model
{
    use HasFactory;

    public function hardware_categories()
    {
        return $this->belongsToMany(HardwareCategory::class);
    }
}
