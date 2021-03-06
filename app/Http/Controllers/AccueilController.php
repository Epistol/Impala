<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Tmdb\Laravel\Facades\Tmdb;

class AccueilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $topmovie = $this->topmovies();

        $datas = array('topmovies' => $topmovie["results"], );

      /*  $response = $this->json('get', '/api/filmsrecherche', ['name' => 'Sally']);
        dd($response);*/


        return view('welcome')->with('datas', $datas);
    }

    public function topmovies(){

        return Tmdb::getMoviesApi()->getPopular(array("language"=>"fr"));

    }




    public function searched(Request $request){

        $input = $request->all();

        if($input['id_movie'] == NULL){
            return "Pas trouvé :/ ";
        }
        else {

            $films = Tmdb::getMoviesApi()->getMovie($input['id_movie'], array("language"=>"fr"));
            return view('detail')->with('film', $films);
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    function sho2w($id)
    {
        // returns information of a movie
        return Tmdb::getMoviesApi()->getMovie($id);
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
