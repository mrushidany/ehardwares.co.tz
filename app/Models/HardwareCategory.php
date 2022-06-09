<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HardwareCategory extends Model
{
    use HasFactory;

    public function hardware_sub_categories()
    {
        return $this->hasMany(HardwareSubCategory::class);
    }

    public function hardware_stocks()
    {
        return $this->hasMany(HardwareStock::class);
    }

}
