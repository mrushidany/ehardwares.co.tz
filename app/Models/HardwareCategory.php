<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HardwareCategory extends Model
{
    use HasFactory, SoftDeletes;

    public function hardware_sub_categories()
    {
        return $this->hasMany(HardwareSubCategory::class);
    }

}
