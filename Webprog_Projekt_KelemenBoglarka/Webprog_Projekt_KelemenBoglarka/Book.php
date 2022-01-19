<?php
    
	namespace Bookstore\Domain; 
    
class Books {
    //tulajdonsagok
    public $isbn;
 	public $title;
	public $author;
    public $available; 

    //metódus, amely kiirja a cimet es a szerzot:
    public function getPrintableTitle(): string {
        $result = '' . $this->title 
        . ' - ' . $this->author; 
        if ($this->available>0) { 
        $result .= ' Not available'; 
        } 
        return $result;
    }

    //metodus
    public function getCopy(): bool {
        if ($this->available < 1) {
        return false;
        } else {
        $this->available--;
        return true;
        }
    }

}
/*
class Customer {

}

$customer = new Customer();
*/

//peldanyositas
$book = new Books();
$book1 = new Books();
$book2 = new Books();

//getCopy metodus
$book->title = "1984"; 
$book->author = "George Orwell"; 
$book->isbn = 9785267006323; 
$book->available = 12;
if ($book->getCopy()) { 
echo 'Here, your copy.';
 } else { 
echo 'I am afraid that book is not available.';
}


//book változó tulajdonságai
$book->title = "1984"; 
$book->author = "George Orwell"; 
$book->available = true; 
var_dump($book);

//saját értékei lesznek, nem írja felül
$book1->title = "1984";
$book2->title = "To Kill a Mockingbird"; 
var_dump($book1, $book2);

//metódus kiiratása
$book->getPrintableTitle();
$book->getCopy();
