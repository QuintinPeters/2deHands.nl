<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'price',
        'quality',
        'image',
    ];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function orders(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }


}

