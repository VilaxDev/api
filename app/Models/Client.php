<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clients';
    protected $fillable = ['first_name', 'last_name', 'email', 'password', 'phone', 'address', 'city', 'state', 'birthdate', 'gender', 'nationality', 'id_document_type', 'id_document_number', 'notes', 'is_active'];
    use HasFactory;
}
