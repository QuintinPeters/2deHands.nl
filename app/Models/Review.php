<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Carbon\Carbon;

class Review extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'rating',
        'comment',
        'seller_id',
        'reviewer_id',
        'orderitem_id',
        'review_date',
    ];


    public $timestamps = false;
    public function seller(): BelongsTo
    {
        return $this->belongsTo(User::class, 'seller_id');
    }

    public function reviewer(): BelongsTo
    {
        return $this->belongsTo(User::class, 'reviewer_id');
    }

    public function orderitem(): BelongsTo
    {
        return $this->belongsTo(OrderItem::class);
    }
}

