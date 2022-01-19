<?php
use Bookstore\Domain\Book; 
use Bookstore\Domain\Customer;
use Bookstore\Domain\BookKonst;
use Bookstore\Domain\Customer2;
	//require_once meghivja a Book/Customer t 
	// __DIR__ mindig abban a mappaban fogja nezni, amelyikben megvan hivva a require_once
	require_once __DIR__ . '/konst.php';
	require_once __DIR__ . '/Customer.php';

	/*function __autoload($classname) {
		$lastSlash = strpos($classname, '\\') + 1; 
	$classname = substr($classname, $lastSlash); 
	$directory = str_replace('\\', '/', $classname); 
	$filename = __DIR__ . '/src/' . $directory . '.php' . require_once($filename);
		}
	*/

	$book1 = new BookKonst(9785267006323,"1984", "George Orwell",  12);
	$book2 = new BookKonst(9780061120084,"To Kill a Mockingbird", "Harper Lee",  2); 

	$customer = new Customer(1, 'John', 'Doe', 'johndoe@mail.com'); 

	$customer1 = new Customer(3, 'John', 'Doe', 'johndoe@mail.com'); 
	$customer2 = new Customer(null, 'Mary', 'Poppins', 'mp@mail.com'); 	
	$customer3 = new Customer(7, 'James', 'Bond', '007@mail.com'); 
	
	Customer::getLastId();
	 
	$customer1::getLastId();

	//lathatosag
	$book1->available = 2; // OK
	echo $book1;
	//$customer->id = 3; // Error!

