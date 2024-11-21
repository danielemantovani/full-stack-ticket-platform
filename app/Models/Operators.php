<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operators extends Model
{
    protected $fillable = ['name', 'email', 'available'];
    use HasFactory;
}