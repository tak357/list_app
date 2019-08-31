<?php

namespace App\Http\Controllers;

use App\Models\Sport;
use Illuminate\Http\Request;

class ListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //プルダウン用リスト
        $sports_list = Sport::orderBy('sport', 'asc')->get();

        //チーム情報取得、検索前に全データを表示
        // $teams = Team::paginate(10);

        return view('list', 
        [
            // 'teams' => $teams, 'sports_list' => $sports_list
            'sports_list' => $sports_list
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sport  $sport
     * @return \Illuminate\Http\Response
     */
    public function show(Sport $sport)
    {
        //
    }
}
