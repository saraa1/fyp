<?php

namespace App\Http\Controllers;

use App\SurveyResponse;
use Illuminate\Http\Request;

use App\Http\Requests;

class SurveyResponseController extends Controller
{
    //
    public function index(){

        $response=SurveyResponse::all();
        return view('survey_response.index',compact('response'));
    }
}

