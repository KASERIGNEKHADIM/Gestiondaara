<?php

namespace App\Models;

use App\Models\Daara;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ndonguo extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
        'chemin',
        'naissance',
        'statue',
        'adresse',
    ];
    /**
     * Get all of the comments for the Ndonguo
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function daaras(): HasMany
    {
        return $this->hasMany(Daara::class);
    }
}
