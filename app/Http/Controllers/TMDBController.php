<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TMDBController extends Controller
{
  public function index()
  {

    $client = new \GuzzleHttp\Client();

    $response = $client->request('GET', 'https://api.themoviedb.org/3/discover/movie?include_adult=true&include_video=true&language=en-US&page=1&sort_by=popularity.desc', [
      'headers' => [
        'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiI4YmM0ZGQ3YzRjYTNmYzM1MTZiMzcxOWI5Y2U3MWVmYiIsIm5iZiI6MTczNjg5MjYwNy4zMzMsInN1YiI6IjY3ODZlMGJmY2FhNTNlOTA5ODdhZWRiYyIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.eLjm6JR38wJOFsZwaJPTSU_tVxIGLVtUpHSihChMm7c',
        'accept' => 'application/json',
      ],
    ]);

    return json_decode($response->getBody());

  }
}
