<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agreement extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'address',
        'contact',
        'payment',
        'scope_of_services',
        'payment_terms',
    
        'date',
        'token'
    ];
}
