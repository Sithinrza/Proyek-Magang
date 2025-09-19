<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactAdd extends Model
{
    use HasFactory;

    // Tambahkan properti ini
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone_number',
        'cooperation_model',
        'message',
    ];
}
