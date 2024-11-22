<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'status', 'operator_id', 'category_id'];

    // Relazione con l'operatore (un ticket appartiene a un operatore, molti ticket possono essere assegnati ad un operatore)
    public function operator()
    {
        return $this->belongsTo(Operator::class);
    }

    // Relazione con la categoria (un ticket appartiene a una categoria, molti ticket posso avere la stessa categoria)
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
