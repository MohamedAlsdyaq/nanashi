<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\m_List as m_List;
use Illuminate\Support\Facades\DB;
use Auth;
use GraphAware\Neo4j\Client\ClientBuilder;

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
       // $top = m_List::whereCreatedAt()
    $recommended = false;    // default value is false, 
  $id = Auth::User()->id;         

    
 $top_movies = DB::select("SELECT lists.movie_id, COUNT(lists.movie_id) AS magnitude,   b.*
                    FROM lists 
                    LEFT JOIN
                       (
                       SELECT * FROM movies
                       ) b
                       ON b.id = lists.movie_id
                    GROUP BY lists.movie_id 
                    ORDER BY magnitude DESC
                    LIMIT 6
                        ");
        
   $latest_updates = DB::select("
  SELECT users.name, users.pic, users.pic, friends.user1,friends.user2, movies.id,movies.movie_name, lists.movie_id, lists.score, lists.tag
        FROM lists
        LEFT JOIN MOVIES ON movies.id=lists.movie_id
        LEFT JOIN friends  ON lists.user_id=friends.user2
        LEFT JOIN users  ON friends.user2=users.id
        WHERE lists.user_id !='$id'
        AND friends.user1='$id'
     
                        ");
        
       
$client = ClientBuilder::create()
 ->addConnection('default', 'http://neo4j:777777@localhost:7474') 
    ->build();
    
        
$query = "
MATCH (input:User) where input.id = {$id}
        MATCH (input)-[:RATED{rating: 5}]->(m)<-[:RATED{rating: 5}]-(o)
        MATCH (o)-[:RATED{rating: 5}]->(reco)
		 MATCH (reco)<-[r:LINK]-(l:Link)
        RETURN distinct  l.tmdbId limit 20";

           

        
    $result = $client->run($query)->firstRecord()->value('l.tmdbId');
        
        
        return view('home', (
            [
                'recommended'=> $result,
                'top'=> $top_movies,
                'updates'=> $latest_updates
            ]
                )
                   
                   );
        
        
        
        
        
    }
}
