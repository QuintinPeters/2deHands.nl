<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class OrderItem extends Model
{
    protected $fillable = ['product_id', 'order_id', 'item_status'];

    protected $table = 'order_items';

    public function order()
    {
        return $this->belongsTo(Order::class );
    }

    public function product()
    {
        return $this->belongsTo(Product::class );
    }

}
