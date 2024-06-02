<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BandModel extends Model
{
    use HasFactory;
    protected $table = 'tbl_band'; // Tên bảng

    protected $primaryKey = 'band_id'; // Khóa chính của bảng

    protected $fillable = [
        'name',
        // Các trường khác nếu cần thiết
    ]; // Các trường có thể gán
}
