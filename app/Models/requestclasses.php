<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class requestclasses extends Model
{
    use HasFactory;
    protected $fillable =['id','user_id','education_id'];
    public $timestamps = false;
}
