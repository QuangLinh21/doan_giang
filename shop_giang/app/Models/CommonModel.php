<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommonModel extends Model
{
    use HasFactory;
    protected $table = 'common_product';
    protected $primaryKey = 'id_common';
}
