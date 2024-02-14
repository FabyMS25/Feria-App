<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Market extends Model
{
    use HasFactory;
    protected $guarded =[];
    public function store() : BelongsTo{
        return $this->belongsTo(Store::class);
    }
}
