<?php

namespace App\Http\Controllers;


use App\Http\Requests\ValidateSurveyRequest;
use App\Questionaire;
use App\SurveyResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Validation\ValidatesRequests;
use  App\Http\Controllers\Controller;


class SurveyController extends Controller
{
    //
    use ValidatesRequests;
    public function show(Questionaire $questionaire,$slug){

        $user = Auth::user();
        $questionaire->load('question.answer');
       return view('survey.show', compact('questionaire','slug','user'));

    }

    public function store(Questionaire $questionaire,$slug){



      //dd(request()->all());
//      $responses=request()->get('responses');
//      //dd($responses);
//        $data= $questionaire->survey()->create($data['survey']);
      //dd($questionaire->survey()->save($data['survey']));
       // dd(\request()->responses);
      // $survey->response()->create();
////       // SurveyResponse::createMany($data['responses']);
////
//
//        return redirect('/survey_response');
//        $data['answer_id']=(request()->has('responses'));
//        dd($data);
//        $survey=$questionaire->survey()->create($data['survey']);
//        $survey->response()->createMany($data['responses']);


            $user=Auth::user();
            //dd(request()->get('answer'));
            $loop= request()->get('answer');
            
            foreach ($loop as $value){
                $survey= new SurveyResponse();
               $survey->survey_id=$questionaire->id;
                $survey->answer_id=$value;
                $survey->save();


            }





    }
}
