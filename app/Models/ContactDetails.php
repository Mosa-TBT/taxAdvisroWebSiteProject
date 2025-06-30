<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactDetails extends Model
{
    protected $fillable = [
        "phone",
        "email",
        "address",
        "facebook",
        "instagram",
        "whatsapp",
        "linkedin"
    ];
}
