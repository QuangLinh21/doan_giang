<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfoCustomerModel extends Model
{
    use HasFactory;
    protected $table = 'info_customer';
    protected $primaryKey = 'id_shipping';
}
