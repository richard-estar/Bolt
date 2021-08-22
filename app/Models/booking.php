<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    use HasFactory;
    protected $table = "booking";
    protected $fillable = ['fname', 'lname', 'email', 'phone', 'destination', 'adults', 'children', 'date', 'total', 'lastfour', 'transactionId'];
}
