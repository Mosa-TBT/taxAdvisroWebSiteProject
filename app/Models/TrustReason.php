<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrustReason extends Model
{
    protected $fillable = [
        "title",
        "details",
        "description"
    ];
}
