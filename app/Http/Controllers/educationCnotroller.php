<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\education;
use App\Models\requestclasses;
class educationCnotroller extends Controller
{
    public function alltest()
    {
        return view('user.test');
    }
    public function c()
    {
        return view('user.c_test');
    }
    public function c_plas_plas()
    {
        return view('user.c++_test');
    }
    public function python()
    {
        return view('user.python_test');
    }
    public function cphp2()
    {
        return view('user.cphp');
    }
    public function cplas2()
    {
        return view('user.cplas');
    }
    public function ppytho2()
    {
        return view('user.ppytho');
    }
    public function schedule_class()
    {
        $education=education::all();
        return view('user.schedule',['education'=>$education]);
    }
    public function newstudentclass(Request $request)
    {
        requestclasses::Create(['user_id'=>auth()->user()->id,'education_id'=>$request->education_id]);
        return Redirect::to('/schedule_user');
    }
    public function educationclass()
    {
        $education=education::all();
        return view('admin.adminclass',['education'=>$education]);
    }
    public function adminfornewclass(Request $request)
    {
        education::Create(['lesson_name'=>$request->lesson_name,'lesson_time'=>$request->lesson_time,'profossor'=>$request->profossor,'student_num'=>$request->student_num,'price'=>$request->price,'date'=>$request->date]);
        return Redirect::to('/adminforclass');
    }
    public function deleteclassadmin(education $b)
    {
        $b->delete();
        return back();
    }
    public function adminfornewtime(Request $request)
    {
        education::where('id', $request->id)->update(array('lesson_time' => $request->lesson_time));
        return back();
    }
    public function adminfornewprice(Request $request)
    {
        education::where('id', $request->id)->update(array('price' => $request->price));
        return back();
    }




}
