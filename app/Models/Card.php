<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $fillable = ['title', 'description', 'image', 'video', 'music', 'user_id', 'deleted'];
}
