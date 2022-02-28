<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HardwareSubCategory extends Model
{
    use HasFactory;

    public function hardware_main_category()
    {
        return $this->belongsTo(HardwareCategory::class);
    }
}
