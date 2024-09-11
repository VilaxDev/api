<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    protected $table = 'travel';
    protected $fillable = ['name', 'description', 'location', 'image', 'rating', 'visitors', 'category'];
    use HasFactory;
}
