<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Tmdb\Laravel\Facades\Tmdb;

class APIController extends Controller
{


    /**
     * @param Request $data
     * @return array
     */
    public function recherche(Request $data){
        $films = Tmdb::getSearchApi()->searchMovies($data['query'], array("language"=>"fr"));
        $resultats = $films['results'];


        foreach ($resultats as $film){
            $contenudonnees[] = ['value' => $film["title"], 'data' => $film["id"]];
        }
        $contenu = array('query' => $data['query'], "suggestions" => $contenudonnees) ;

        return $contenu;

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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function destroy($id)
    {
        //
    }
}
