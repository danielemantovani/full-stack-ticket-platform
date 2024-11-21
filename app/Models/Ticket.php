<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'status', 'operator_id', 'category_id'];

    // Relazione con l'operatore (un ticket appartiene a un operatore)
    public function operator()
    {
        return $this->belongsTo(Operator::class);
    }

    // Relazione con la categoria (un ticket appartiene a una categoria)
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
