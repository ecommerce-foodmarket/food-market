<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Product;

class Order extends Model
{
    use HasFactory;

    // /**
    //  * The attributes that are mass assignable.
    //  *
    //  * @var array<int, string>
    //  */
    protected $fillable = [
        'cost',
        'id_user',
        'id_status',
    ];
    protected $guarded=[];


    
    public function products():BelongsToMany
    {
    return $this->belongsToMany(Product::class)->withPivot('amount');
    }
}
