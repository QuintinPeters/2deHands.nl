<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Request;

class product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'price',
        'quality',
        'image',
        'is_sold',
        'category_id',
        
        
    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function orders(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    public function cart(): HasOne
    {
        return $this->hasOne(Cart::class);
    }


}

