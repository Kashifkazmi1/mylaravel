<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table_customers extends Model
{
    use HasFactory;
    protected $table = "table_customers";
    protected $primaryKey = "customer_id";
}
