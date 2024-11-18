<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    //reazione con tickets
    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}
