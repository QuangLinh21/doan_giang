<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    use HasFactory;
    protected $table = 'category';
    protected $primaryKey= 'id_category';
    protected $fillable=[
        'id_category',
        'name_category',
        'description',
        'place'
    ];
}
