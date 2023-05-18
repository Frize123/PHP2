<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    public $timestamps = false;

    protected $fillable = [
        'category_name',
        'symbol_code',
        'activity',
        'creation_date',
        'parent_category',
    ];
    public function products() : HasMany  {
        return $this->hasMany(Product::class);
    }
}
