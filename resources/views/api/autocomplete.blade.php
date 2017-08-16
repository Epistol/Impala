<?php
/////////////////////////////////////////////////////////////////////////////////////////////////////////
// IMDb Suggest with jQuery Autocomplete
// Author: Abhinay Rathore
// Demo: http://lab.abhinayrathore.com/imdb_suggest/
// Website: http://www.AbhinayRathore.com
// Blog: http://web3o.blogspot.com
// Last Updated: Oct 26, 2011
/////////////////////////////////////////////////////////////////////////////////////////////////////////
try{

{{ Route::current()->parameter('theParameterName') }}
    $search = str_replace(array(" ", "(", ")"), array("_", "", ""), $term); //format search term


    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.themoviedb.org/3/search/movie?include_adult=false&page=1&query=les%20minions&language=fr&api_key=72b165171d37b62571511123670a79c2",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_POSTFIELDS => "{}",
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
        echo $response;
    }


} catch (Exception $e){
    if ($e) {
        echo "cURL Error #:" . $e;
    }
}
?>