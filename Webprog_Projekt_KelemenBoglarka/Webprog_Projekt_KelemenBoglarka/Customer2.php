<?php
namespace Bookstore\Domain; 
    class Customer2 {
        private $id;
        private $firstname; 
        private $surname; 
        private $email; 

        public function __construct( 
            int $id, 
            string $name,
            string $surname, 
            string $email 
            ) { 
            if ($id == null) {
            $this->id = ++self::$lastId; 
            } else {
                 $this->id = $id;
             if ($id > self::$lastId) { 
            self::$lastId = $id; 
            } 
            } 
            $this->name = $name; 
            $this->surname = $surname; 
            $this->email = $email;
        }
            
    }