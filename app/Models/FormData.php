<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormData extends Model
{
    protected $table = 'forms';
    protected $fillable = ['NAME', 'EMAIL', 'CONTACT_NO', 'MESSAGE'];
}
