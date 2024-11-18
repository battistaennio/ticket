<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    //relazione con user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //relazione con category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    //relazione con operator
    public function operator()
    {
        return $this->belongsTo(Operator::class);
    }
}
