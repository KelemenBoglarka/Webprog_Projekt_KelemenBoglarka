<?php

	namespace Bookstore\Domain; 

class Customer {
    //lathatosagok, private csak a Customer osztalyon belul
    private $id;
    private $firstname; 
    private $surname; 
    private $email; 

    //Statikus tulajdonságok és metódusok, az utolsó azonosítót mutatja
    private static $lastId = 0;

    //kostruktor
    public function __construct( 
         $id, 
        string $firstname, 
        string $surname, 
        string $email 
    ) { //magához az osztályhoz kapcsolja
        if ($id == null) {
            $this->id = ++self::$lastId; 
            } else {
                 $this->id = $id;
             if ($id > self::$lastId) { 
            self::$lastId = $id; 
            } 
        } 
             
        $this->firstname = $firstname; 
        $this->surname = $surname; 
        $this->email = $email; 
    }

    //Egységbezárás
    public function getId(): id {
        return $this->id;
    }
    public function getFirstname(): string {
        return $this->firstname;
    }
    public function getSurname(): string {
        return $this->surname;
    }
    public function getEmail(): string {
        return $this->email;
    }
    public function setEmail(string $email) {
        $this->email = $email;
    }
    public static function getLastId(): int {
        return self::$lastId; 
       }
       
        
}


