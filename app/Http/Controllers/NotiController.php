<?php

namespace App\Http\Controllers;

use App\Models\Noti;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotiController extends Controller
{
    public function index(){
        $notis =Noti::latest()->paginate(8);

        return view('Admin.Noti.index',compact('notis'));
    }

    public function create(){
        return view('Admin.Noti.create');
    }

    public function store(Request $request)
    {
        $data=$request->validate([
            "text"=>"required"
        ]);
        Noti::create([
            "text"=> $request->input('text'),
            "user_id"=> Auth::user()->id
        ]);
        return redirect()->route('noti.index');
    }
    public function delete($id){
        Noti::find($id)->delete();
        return back()->with('success','Successully Delete');
    }
    public function edit($id)
    {
        $noti=Noti::find($id);
        return view('Admin.Noti.edit',compact('noti'));

    }

    public function update($id,Request $request){
       $old=Noti::find($id);
       $data=$request->validate(['text'=>'required']);
       $old->update($data);
       return redirect()->route('noti.index')->with('success','Successfully Updated');

    }

    public function notiAll(){
        $notis=Noti::all();
       return view('ui.noti',compact('notis'));
    }
}
