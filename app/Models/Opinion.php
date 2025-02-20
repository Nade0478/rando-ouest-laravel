<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Opinion extends Model
{
    use HasFactory;
    protected $fillable = ['title_opinion', 'content_opinion', 'note_opinion', 'users_id','place_rando_id'];
}
