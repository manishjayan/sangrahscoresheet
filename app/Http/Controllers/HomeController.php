<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Winner;
use App\College;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $college = new College();
        $colleges = $college->get()->all();
        return view('home', ['colleges' => $colleges]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $first_name = $request['firstname'];
        $second_name = $request['secondname'];
        $third_name = $request['thirdname'];
        $first_college = $request['first_college'];
        $second_college = $request['second_college'];
        $third_college = $request['third_college'];

        $winner = new Winner();
        $winner->name = $first_name;
        $winner->college_id = (int) $first_college;
        $winner->user_id = Auth::user()->id;
        $winner->save();

        $college = College::find((int) $first_college);
        $prev_points = $college->points;
        $college->points = $prev_points + 10;
        $college->save();
        
        $winner = new Winner();
        $winner->name = $second_name;
        $winner->college_id = (int) $second_college;
        $winner->user_id = Auth::user()->id;
        $winner->save();

        $college = College::find((int) $second_college);
        $prev_points = $college->points;
        $college->points = $prev_points + 6;
        $college->save();

        $winner = new Winner();
        $winner->name = $third_name;
        $winner->college_id = (int) $third_college;
        $winner->user_id = Auth::user()->id;
        $winner->save();

        $college = College::find((int) $third_college);
        $prev_points = $college->points;
        $college->points = $prev_points + 3;
        $college->save();
       
        return ['msg' => 'success'];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Winner  $winner
     * @return \Illuminate\Http\Response
     */
    public function show(Winner $winner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Winner  $winner
     * @return \Illuminate\Http\Response
     */
    public function edit(Winner $winner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Winner  $winner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Winner $winner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Winner  $winner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Winner $winner)
    {
        //
    }
}
