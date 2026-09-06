<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AnswerController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'question_id' => 'required|exists:questions,id',
            'answer_text' => 'nullable|string|max:5000',
            'answer_image' => 'nullable|image|mimes:jpg,jpeg,png|max:4096',
            'answer_voice' => 'nullable|array',
            'answer_voice.*' => 'file|mimes:mp3,wav,ogg,m4a,webm|max:10240',
        ]);

        $imagePath = null;

        if ($request->hasFile('answer_image')) {
            $imagePath = $request->file('answer_image')
                ->store('answers', 'public');
        }

        $voicePaths = [];

        if ($request->hasFile('answer_voice')) {
            foreach ($request->file('answer_voice') as $voice) {
                $voicePaths[] = $voice->store(
                    'answer_voice',
                    'public'
                );
            }
        }

        if (
            !$request->filled('answer_text') &&
            empty($voicePaths)
        ) {
            return back()
                ->withErrors([
                    'answer' => is_urdu() ? 'براہِ کرم جواب لکھیں یا کم از کم ایک صوتی پیغام ریکارڈ کریں۔' : 'Please write an answer or record at least one voice note.'
                ])
                ->withInput();
        }

        Answer::create([
            'question_id' => $request->question_id,
            'expert_id' => Auth::id(),
            'answer_text' => $request->answer_text,
            'answer_image' => $imagePath,
            'answer_voice' => $voicePaths,
        ]);

        return back()->with(
            'success',
            is_urdu() ? 'جواب کامیابی سے جمع کر دیا گیا ہے۔' : 'Answer submitted successfully.'
        );
    }

    public function destroy(int $id)
    {
        $answer = Answer::findOrFail($id);

        if ($answer->answer_image) {
            Storage::disk('public')->delete(
                $answer->answer_image
            );
        }

        if ($answer->answer_voice) {
            foreach ($answer->answer_voice as $voice) {
                Storage::disk('public')->delete($voice);
            }
        }

        $answer->delete();

        return back()->with(
            'success',
            is_urdu() ? 'جواب کامیابی سے حذف کر دیا گیا ہے۔' : 'Answer deleted successfully.'
        );
    }
}
