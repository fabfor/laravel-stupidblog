<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){

      return view('homepage');
    }

    /*
    /blog/{qualcosa}
    */
    public function viewPost($post_id){

      $posts = array('1' => "Testo di post1",
                     '2' => "Testo di post2"
                     );


      $testo_post = 'POST NON TROVATO';

      foreach ($posts as $key => $value) {
        if ($key == $post_id){
          $testo_post = $value;
        }
      }

      return view('post',['testo'=>$testo_post]);
    }
}
