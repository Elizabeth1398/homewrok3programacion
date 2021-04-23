<?php

  require_once('Editorial.php');

  class EditorialController extends Controller {

   public function index() {  
      return view('Editorial',
       ['Editorial'=>Editorial::all(),
        'title'=>'Editorials List']);
    }

    public function show($id) {

      $prof = Editorial::find($id);
      

      return view('editorial',
        ['editorial'=>$prof,
         'editorial2' =>  $prof['books_title']['b'],
         'editorial3' =>  $prof['books_title']['a']
         ]);
    }
  }
?>