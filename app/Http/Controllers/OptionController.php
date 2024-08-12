<?php

namespace App\Http\Controllers;

use App\Models\Option;
use App\Models\Question;
use Illuminate\Http\Request;

class OptionController extends Controller
{
    public function edit($id){
        $questions=Question::all();
        $option =Option::find($id);
        return view('Admin.option.edit',compact('option','questions'));


    }
    public function index(){
        $options=Option::with('question')->latest()->paginate(10);
        return view('Admin.option.index',compact('options'));
    }

    public function add(){
        $questions=Question::all();
        return view('Admin.option.add',compact('questions'));
    }

    public function store(Request $request){
        $data=$request->validate([
            'answer'=>'required',
            'points'=>'required',
            'question_id'=>'required'

        ]);
        Option::create($data);
        return redirect()->route('options')->with('success','New Answer Added Successfully');
    }

    public function update(Request $request,$id){
      $data = $request->validate([
        'answer'=>"required",
        'points'=>'required',
        'question_id'=>'required'
      ]);
     Option::find($id)->update($data);
     return redirect()->route('options')->with('success','Update Successfully');



    }

    //delete

    public function delete($id){
        Option::find($id)->delete();
        return redirect()->route('options')->with('success','Delete  Answer Successfully');
    }
}
