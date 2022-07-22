<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    protected $fillable = ['fullName', 'company', 'phone', 'mail', 'birthDate', 'photo'];

    protected $guarded = ['id', 'updated_at'];
}
