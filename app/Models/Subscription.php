<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Subscription extends Model
{
    use HasFactory;
    protected $guarded =[];
    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }
    public function  company() :BelongsTo{
        return $this->belongsTo(Company::class);
    }
}
