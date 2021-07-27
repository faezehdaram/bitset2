<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requests extends Model
{
    use HasFactory;
    protected $fillable =['id','user_id','project_id','price','date','daily','name','employername'];
    public $timestamps = false;
}
