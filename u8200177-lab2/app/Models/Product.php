<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    public $timestamps = false;

    protected $fillable = [
        'product_name',
        'symbol_code',
        'detailed_content',
        'price',
        'image',
        'amount',
        'creation_date',
        'category_id',
    ];
    public function category() : BelongsTo {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
