<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    use HasFactory;
    protected $table = 'tbl_product'; // Tên bảng

    protected $primaryKey = 'product_id'; // Khóa chính của bảng

    protected $fillable = [
        'category_id',
        'title',
        'price',
        'discount',
        'images',
        'description',
        'created_at',
        'updated_at',
        'deleted'
    ]; // Các trường có thể gán

    // Định nghĩa quan hệ với các Model khác nếu cần
}
