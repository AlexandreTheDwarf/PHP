<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    protected $table = '_restaurant';

    protected $fillable = ['name', 'adress', 'zip_code', 'town', 'country', 'description', 'review'];
}
