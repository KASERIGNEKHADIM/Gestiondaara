<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daara extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'Capacite',
        'Adresse',
        'telephone',
    ];
}
