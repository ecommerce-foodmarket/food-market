<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',

    ];



    public function users(): HasMany
    {
        return $this->hasMany(User::class, 'id_rol', 'id');
    }
}
