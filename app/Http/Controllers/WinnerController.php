<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\College;
use DB;

class WinnerController extends Controller
{
     /**
     * Display the specified resource.
     *
     * @param  \App\Winner  $winner
     * @return \Illuminate\Http\Response
     */
    public function show_winners() 
    {
        $score_board = []; 
        $events = User::get()->all();
        foreach($events as $event) {
            $score_board[$event->event_name] = [];
        } 

        $winners = DB::select('SELECT users.event_name, users.department, winners.name, winners.position, colleges.college_name 
        FROM users, winners, colleges
        WHERE winners.user_id = users.id and winners.college_id = colleges.id');

        // format score board
        foreach($score_board as $key => $value) {
            $each = [];
            foreach($winners as $winner) {
                if($winner->event_name == $key) {
                    array_push($each, $winner);
                }
            }
            $score_board[$key] = $each;
        }
        //return view('welcome', ['scoreboard' => $scoreboard]);
        return $score_board;
    }

    public function show_leaderboard()
    {
        $colleges = College::get()->all();
        return view('leaderboard', ['colleges' => $colleges]);
    }

}
