<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengambilan extends Model
{
    use HasFactory;
    protected $table = 'pengambilan';
    protected $guarded = ['id'];
    public $timestamps = false;
}
