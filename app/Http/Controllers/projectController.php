<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Requests;
use App\Models\User;
class projectController extends Controller
{
    public function deletproject(Requests $b)
    {
        $b->delete();
        return back();
    }
    public function reqestProject()
    {
        return view('user.reqpro');
    }
    public function addproject(Request $request)
    {
        Project::Create(['name'=>$request->name,'specifications'=>$request->specifications,'date'=>$request->date,'employer'=>$request->employer]);
        return back();
    }
    public function dailyProject()
    {
        $request=Requests::all();
        $project=Project::all();
        return view('user.dailystatus',['Requests'=>$request]);
    }
    public function daily()
    {
        $request=Requests::all();
        $project=Project::all();
        return view('programer.dailyreport',['Project'=>$project],['Requests'=>$request]);
        
    }
    public function accept()
    {
        $project=Project::all();
        return view('programer.acceptpro',['Project'=>$project]);
        
    }
    public function acceptoneprolist(Request $request)
    {
        Requests::Create(['user_id'=>auth()->user()->id,'project_id'=>$request->id,'price'=>$request->price,'date'=>$request->date,'daily'=>$request->daily,'name'=>$request->name,'employername'=>$request->employername]);
        $p= Project::find($request->id);
        $p->status='1';
        $p->save();
        return Redirect::to('/acceptprogramer');
    }
    public function detailpro($b)
    {
        $project=Project::find($b);
        return view('programer.detailforpro',['project'=>$project]);
    }
    
    public function adminclassControll()
    {
        $request=Requests::all();
        $project=Project::all();
        $user=User::all();
        return view('admin.adminproject',['User'=>$user],['Requests'=>$request]);
    }
    public function updateproject(Request $request)
    {
        Requests::where('id', $request->id)->update(array('daily' => $request->daily));
        return back();
    }
    public function Adaddprogramer(Request $request)
    {
        User::where('id', $request->id)->update(array('role_id' => $request->role_id));
        return back();
    }
}
