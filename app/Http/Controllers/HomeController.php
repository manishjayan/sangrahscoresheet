<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Winner;
use App\College;
use App\User;
use Auth;
use DB;

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
    {   if(Winner::where('user_id', Auth::user()->id)->count()) {
            return redirect('/success');
        }
        $college = new College();
        $colleges = $college->get()->all();
        return view('home', [
            'colleges' => $colleges,
            'event' => Auth::user()->event_name,
            'department' => Auth::user()->department
        ]);
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
        $winner->position = 1;
        $winner->user_id = Auth::user()->id;
        $winner->save();

        $college = College::find((int) $first_college);
        $prev_points = $college->points;
        $college->points = $prev_points + 10;
        $college->save();
        
        $winner = new Winner();
        $winner->name = $second_name;
        $winner->college_id = (int) $second_college;
        $winner->position = 2;
        $winner->user_id = Auth::user()->id;
        $winner->save();

        $college = College::find((int) $second_college);
        $prev_points = $college->points;
        $college->points = $prev_points + 6;
        $college->save();

        $winner = new Winner();
        $winner->name = $third_name;
        $winner->college_id = (int) $third_college;
        $winner->position = 3;
        $winner->user_id = Auth::user()->id;
        $winner->save();

        $college = College::find((int) $third_college);
        $prev_points = $college->points;
        $college->points = $prev_points + 3;
        $college->save();
       
        return redirect('/success');
    }

    public function success_page() {
        $results = DB::select('SELECT * FROM winners, colleges WHERE user_id = ? AND college_id = colleges.id',
                     [Auth::user()->id]);
        return view('success', ['results' => $results, 
            'event' => Auth::user()->event_name,
            'department' => Auth::user()->department
        ]);
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
