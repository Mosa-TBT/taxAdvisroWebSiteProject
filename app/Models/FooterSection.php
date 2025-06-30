<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FooterSection extends Model
{
    protected $fillable = [
        "phone",
        "email",
        "address",
        "Facebook",
        "Linkedin"
    ];
}
