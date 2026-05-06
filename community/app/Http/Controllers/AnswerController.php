<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'question_id'=>'required|exists:questions,id',
            'answer_text'=>'nullable|string',
            'answer_image'=>'nullable|image|max:300'
        ]);

        $imagePath = null;
        if($request->hasFile('answer_image')){
            $imagePath = $request->file('answer_image')->store('answers','public');
        }

        Answer::create([
            'question_id'=>$request->question_id,
            'expert_id'=>Auth::id(),
            'answer_text'=>$request->answer_text,
            'answer_image'=>$imagePath
        ]);

         return back()->with('success', 'Answer submitted!');
    }

}

