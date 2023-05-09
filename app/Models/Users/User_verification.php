<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_verification extends Model
{
    use HasFactory;

    protected $fillable = [
        'email_or_nomor_hp', 'token', 'expired_at'
    ];

    protected $guarded = [];

    protected $dates = [
        'expired_at'
    ];

}
