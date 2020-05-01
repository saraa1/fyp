<?php

namespace App\Http\Controllers;

use App\Category;
use App\Question;
use App\Questionaire;
use Illuminate\Http\Request;

use App\Http\Requests;

class AdminQuestionaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $questionaire = Questionaire::all();


        return view ('admin.questionaire.index',compact('questionaire'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $category= Category::lists('name','id')->all();
        return view ('admin.questionaire.create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Questionaire::create($request->all());
        return redirect('admin/questionaire');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Questionaire $questionaire)
    {
        //
        $questionaire=$questionaire->load('question.answer');
        return view('admin.questionaire.show',compact('questionaire'));

//        $ques = Questionaire::where('category_id',$id)->get();
//        return view ('admin.questions.show',compact('ques'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Questionaire $questionaire)
    {
        //

        //return redirect()->back();


    }
}
