<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class education extends Model
{
    use HasFactory;
    protected $fillable =['id','lesson_name','lesson_time','profossor','student_num','price','date'];
    public $timestamps = false;
}
