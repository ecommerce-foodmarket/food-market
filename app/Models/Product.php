<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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


   public function category()
   {
       return $this->belongsTo(Category::class, 'id_category');
   }




}
