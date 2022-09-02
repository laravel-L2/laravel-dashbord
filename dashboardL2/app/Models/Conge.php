<?php

namespace App\Models;

use App\Models\Conges;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Conge extends Model
{
    use HasFactory;

    public function conges()
    {
        return $this->hasMany(Conges::class);
    }
}
