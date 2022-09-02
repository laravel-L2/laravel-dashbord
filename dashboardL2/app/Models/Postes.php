<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Postes extends Model
{
    use HasFactory;
    protected $table = 'postes';
    protected $fillable = ['titre','department','add_poste_date', 'description'];
}
