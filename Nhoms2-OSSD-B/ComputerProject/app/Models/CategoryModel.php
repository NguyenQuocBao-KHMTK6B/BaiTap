<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    use HasFactory;
    protected $table = 'tbl_categories'; // Tên bảng

    protected $primaryKey = 'category_id'; // Khóa chính của bảng

    protected $fillable = [
        'name',
        // Các trường khác nếu cần thiết
    ]; // Các trường có thể gán
}
