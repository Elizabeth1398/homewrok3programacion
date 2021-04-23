<?php
 

  require_once('Book.php');

  class BookController extends Controller {

   public function index() {  
      return view('Book',
       ['Books'=>Book::all(),
        'title'=>'Books List']);
    }

    public function show($id) {
      $prof = Book::find($id);
      return view('Book/show',
        ['Book'=>$prof,
         'title'=>'Book Details']);
    }


  }
?>