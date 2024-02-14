<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class ClientType extends Model
{
    use HasFactory;
    protected $guarded =[];
    public function  clients() :BelongsToMany{
        return $this->belongsToMany(Client::class);
    }
}
