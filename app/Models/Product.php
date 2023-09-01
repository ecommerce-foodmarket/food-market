<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Order;



class Product extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $fillable = [
        'name_product',
        'description',
        'id_category',
        'price',
        
    ];

    
   

    public function order():BelongsToMany
    {
    return $this->belongsToMany(Order::class)->withPivot('amount');
    }
}
