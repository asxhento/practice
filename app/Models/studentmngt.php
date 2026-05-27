<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use illuminate\Database\Eloquent\Factories\HasFactory;
class studentmngt extends Model
{
    use HasFactory;
    protected $table = '3a_tbl';
    protected $fillable = [
        'fname',
        'lname',
        'mname',
        'add',
        'dobirth',
    ];
}
