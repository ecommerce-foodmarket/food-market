<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongTo;
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
        'updated_at'
    ];
    protected $guarded=[];


    
    public function products():BelongsToMany
    {
    return $this->belongsToMany(Product::class)->withPivot('amount', 'id_product');

    }
    public function status()
    {
        return $this->belongsTo(Status::class, 'id_status');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
