<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petani extends Model
{
    use HasFactory;
    protected $table = 'petani';
    protected $guarded = ['id'];
    public $timestamps = false;
}
