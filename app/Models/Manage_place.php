<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Manage_place extends Model
{
    use HasFactory;
    protected $fillable = ['users_id','place_rando_id'];
}
