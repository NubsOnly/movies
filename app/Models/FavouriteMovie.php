<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FavouriteMovie extends Model
{
    use HasFactory;

    protected $fillable = ['Plot', 'Year', 'Title', 'Poster', 'ImdbID'];
}
