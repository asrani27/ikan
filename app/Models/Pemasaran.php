<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemasaran extends Model
{
    use HasFactory;
    protected $table = 'pemasaran';
    protected $guarded = ['id'];
    public $timestamps = false;
}
