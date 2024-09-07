<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addpro extends Model
{
    use HasFactory;
    protected $table = 'addpro';
    protected $fillable = ['nama', 'email', 'pesan'];
}
