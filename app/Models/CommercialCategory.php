<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CommercialCategory extends Model
{
    use HasFactory;
    protected $guarded =[];
    public function  companies() :BelongsToMany{
        return $this->belongsToMany(CommercialCategory::class);
    }
}
