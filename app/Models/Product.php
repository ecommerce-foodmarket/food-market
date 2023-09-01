<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Order;



class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_product',
        'description',
        'id_category',
        'price',
        'picture'
   ];


public function category(): BelongsTo
{
    return $this->belongsTo(Category::class, 'id', 'id_category');
}




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
