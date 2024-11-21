<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operator extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'available'];

    // Relazione con i ticket (un operatore può avere molti ticket)
    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}
