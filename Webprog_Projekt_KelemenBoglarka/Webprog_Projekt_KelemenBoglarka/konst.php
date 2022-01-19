<?php
namespace Bookstore\Domain; 
class BookKonst{

    public $isbn;
    public $title;
    public $author;
    public $available; 

    //konstuktor
    public function __construct(
		    int $isbn, 
        string $title, 
        string $author, 
        int $available = 0
    ) {
	    $this->isbn = $isbn; 
        $this->title = $title; 
        $this->author = $author; 
        $this->available = $available;
    }

    //toString
    public function __toString() {
		  $result = '' . $this->title . ' - ' . $this->author;
		if ($this->available<1) {
			$result .= ' Not available';
		}
		return $result;
	}


}

$book1 = new BookKonst("1984", "George Orwell", 9785267006323, 12);
$book2 = new BookKonst("1984", "George Orwell", 9785267006323);

// létrehoz egy book objektumot, majd egy karakterlánccá alakítja at
$book = new BookKonst(1234, 'title', 'author');
//a toString meghivodik amikor string e alakitunk egy objektumot
$string = (string) $book; // title - author Not available

//akkor is meghivodik a toString, amikor kiiratunk egy objektumot
echo $book1;

//toString kiiratasa
echo $string;

//konstuktor peldanyositasa
$book = new BookKonst("1984", "George Orwell", 9785267006323, 12);

