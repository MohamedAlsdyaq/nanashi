<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tweet as Tweet;
use App\User as User;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use GraphAware\Neo4j\Client\ClientBuilder;

 
class MovieController extends Controller
{
    //
    
    public function show($id){
        
  $posts = Tweet::with('user')->where([
     ['movie_id', '=', $id],
      ['type', '=', null]
      ])->get();
        

$client = ClientBuilder::create()
 ->addConnection('default', 'http://nanashi:b.VAIonp8e2S89.au9RqRmt45XGFqho@hobby-njmfcaohojekgbkeengnpcol.dbs.graphenedb.com:24789') 
    ->build();
        
$query = "MATCH (link:Link)-[:LINK]->(movie:Movie)
WHERE link.tmdbId = {$id}
MATCH (x)<-[:HAS_GENRE]-(ee:Movie{id:movie.id})
// collect genres so only one result row so far
WITH ee, COLLECT(x) as genres
MATCH (ee)<-[:RATED{rating: 5}]-()-[:RATED{rating: 5}]->(another_movie)
WITH genres,  another_movie
// don't match on genre until previous query filters results on rating
MATCH (another_movie)-[:HAS_GENRE]->(y:Genre)
WITH genres, another_movie, COLLECT(y) as gs
WHERE size(genres) <= size(gs) AND ALL (genre IN genres WHERE genre IN gs)
WITH another_movie 
//maMATCH (another_movie)-[:LINK]->(l2:Link)tch external links
MATCH (another_movie)<-[:LINK]-(external:Link)
RETURN DISTINCT another_movie, external
";

        $recommended = false;        
$result = $client->run($query)->records();
      //dd($result);
foreach($result as $record) {
    
if($record->get('external')->hasValue('tmdbId')){
   $recommended = $record->get('external')->value('tmdbId');
    break;
    }
else 
        continue;
    }        
        

        return view('movie')->with([
            'posts' => $posts,
            'recommended' => $recommended
                ]);
            }
    
    public function search(){
      // $query = Request::input('search');
 $q = Input::get ( 'q' );

        return view('search')->with('movie_name', $q);
    }
    
    public function browse($id){
        
        return view('browse')->with('id', $id);
        
    }
}
