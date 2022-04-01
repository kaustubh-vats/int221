<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use DB;

class ShowsController extends Controller
{
    //
    public function getShows(Request $request){
        $lang = \app()->getlocale();
        try{
            $results=DB::select('select genre from shows where lang="'.$lang.'" group by genre order by id asc'); 
            $showsarray = array();
            for($i=0;$i<count($results);$i++){
                $shows = DB::select('select * from shows where genre="'.$results[$i]->genre.'" and lang="'.$lang.'" order by id asc');
                $tempArray = array();
                for($j=0;$j<count($shows);$j++){
                    array_push($tempArray,array(
                        "name"=>$shows[$j]->Name,
                        "image"=>$shows[$j]->image,
                        "link"=>$shows[$j]->link,
                    ));
                }
                array_push($showsarray,array(
                    "genre"=>$results[$i]->genre,
                    "shows"=>$tempArray,
                ));
            }
            json_encode($showsarray);
            return view('shows',['shows'=>$showsarray]);
        }catch(\Exception $e){
            Cookie::queue('message', 'Failed to Access Shows Data '.$e->getMessage());
            return redirect('/'.$lang);
        }
        return view('shows');
    }
}
