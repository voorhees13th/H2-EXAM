<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExamModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ExamController extends Controller
{
    public function index()
    {
        return view('exam');
    }

    public function flag(){
        $flag = date("ymdH").strtoupper(Str::random(2));

        return $flag;
    }

    public function saveAnswer(Request $request){
        // User is authenticated
        $formData = $request->all();
        $userId = Auth::id();
        $flag = $this->flag();

        foreach ($formData as $questionNumber => $answer) {
            $db = new ExamModel;
            $db->user_id = $userId;
            $db->answer = $answer;
            $db->question_no = $questionNumber;
            $db->flag = $flag;
            $db->save();
        }

        return response()->json("Success", 200);
    } 

    public function result(){
        $latestRecord = ExamModel::latest()->first();
    
        if ($latestRecord) {
            $flag = $latestRecord->flag;
    
            $getData = \DB::table('exam_table')
                ->where('flag', $flag)
                ->get();

            $answerCounts = \DB::table('exam_table')
                ->where('flag', $flag)
                ->select('answer', \DB::raw('COUNT(*) as count'))
                ->groupBy('answer')
                ->get();
    
            $countA = $answerCounts->firstWhere('answer', 'A')->count ?? 0;
            $countB = $answerCounts->firstWhere('answer', 'B')->count ?? 0;
            $countC = $answerCounts->firstWhere('answer', 'C')->count ?? 0;
    
            $isAGreater = $countA > $countB && $countA > $countC;
            $isBGreater = $countB > $countA && $countB > $countC;
            $isCGreater = $countC > $countB && $countC > $countA;
            $isEqual = $countA = $countB ||
                        $countA = $countC ||
                        $countB = $countA ||
                        $countB = $countC ||
                        $countC = $countA ||
                        $countC = $countB;

            return view('result', compact('getData', 'answerCounts', 'isAGreater', 'isBGreater', 'isCGreater', 'isEqual'));
        } else {
            return view('result', ['getData' => null]);
        }
    }
}
