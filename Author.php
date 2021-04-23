<?php
  

class Author extends Model {
	
  static $Authors = [
    ['id'=>1,'author'=>'Abraham Silberschatz','nationality'=>'Israelis / American',
     'birth_year'=>'1952','fields'=>'Database Systems, Operating Systems',
      'books__book_id' => ['a'=>'1','b'=>'2'] ,'books_title'=> ['a'=>'Operating System Concepts', 'b'=> 'Database System Concepts']], 

     ['id'=>2,'author'=>'Andrew S. Tanenbaum','nationality'=>'Dutch / American',
     'birth_year'=>'1944','fields'=>'Distributed computing, Operating Systems',
     'books__book_id'=>  ['a'=>'3','b'=>'4'],'books_title'=> ['a'=>'Computer Networks', 'b'=> 'Modern Operating Systems']], 
  ];

 public static function all() { 
    return self::$Authors;
  }
  public static function find($id) {
    foreach (self::$Authors as $key => $prof)
      if ($prof['id'] == $id) return $prof;
    return [];
  }
}
?>