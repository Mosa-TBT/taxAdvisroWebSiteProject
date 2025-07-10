<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutPageContent extends Model
{
    protected $fillable = ['type', 'title', 'text_content', 'list_content'];

    protected $casts = [
        'list_content' => 'array',
    ];
}
