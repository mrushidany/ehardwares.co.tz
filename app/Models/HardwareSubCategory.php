<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HardwareSubCategory extends Model
{
    use HasFactory, SoftDeletes;

    public function hardware_main_category()
    {
        return $this->belongsTo(HardwareCategory::class);
    }
}
