<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $table = 'product_models';
    public function category()
    {
        return $this->belongsTo(CategoryModel::class, 'category_id');
    }
}