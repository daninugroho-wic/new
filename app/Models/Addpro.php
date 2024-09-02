<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class addpro extends Model
{
    use HasFactory;
    protected $table = 'addpro';
    protected $fillable = ['judul', 'deskripsi', 'image', 'status'];
}
