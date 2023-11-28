<?php

namespace Laraditz\Lazada\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LazadaOrder extends Model
{
    use HasFactory;

    public $incrementing = false;

    protected $fillable = ['id', 'seller_id', 'status', 'statuses'];

    protected $casts = [
        'statuses' => 'json'
    ];

    public function seller(): BelongsTo
    {
        return $this->belongsTo(LazadaSeller::class);
    }
}
