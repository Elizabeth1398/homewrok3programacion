<?php

  require_once('Author.php');

  class AuthorController extends Controller {

   public function index() {
      return view('Author',
       ['Authors'=>Author::all(),
        'title'=>'Authors List']);
    }

    public function show($id) {
      $prof = Author::find($id);
      return view('author',
        ['author'=>$prof,
        'author2' =>  $prof['books_title']['b'],
         'author3' =>  $prof['books_title']['a'] 
        ]);
    }
  }
?>