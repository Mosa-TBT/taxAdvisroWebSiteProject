<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class AboutPageContent extends Model
{
    protected $fillable = ['type', 'title', 'text_content', 'list_content'];

    protected $casts = [
        'list_content' => 'array',
    ];
}
