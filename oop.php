<?php 
class Book {
 // TODO: Add properties as Private
 private $title=["The Great Gatsby","To Kill a Mockingbird"];
 private $availableCopies;
 
 public function __construct($title, $availableCopies) {
     // TODO: Initialize properties
     $this->title=$title;
     $this->availableCopies=$availableCopies = 0;
     }
// TODO: Add getTitle method
public function getTitle(){
    
}
 

 // TODO: Add getAvailableCopies method
 public function getAvailableCopies($availableCopies){
    $this->availableCopies=$availableCopies;
 }

 // TODO: Add borrowBook method
 public function borrowBook($availableCopies){
    $this->availableCopies-=$availableCopies;
 }
 

 // TODO: Add returnBook method
 public function returnBook($availableCopies){
    $this->availableCopies+=$availableCopies;
 }
 
}

class Member {
 // TODO: Add properties as Private

 public function __construct($name) {
      // TODO: Initialize properties
     }

 // TODO: Add getName method
 
 // TODO: Add borrowBook method
 

 // TODO: Add returnBook method
 
}


/*
// Usage
// You have to create  2 books and 2 members. Members One should borrow  book 1 and Member Two should borrow  book 2.
// TODO: Create 2 books with the following properties
Book 1 - Name: The Great Gatsby, Available Copies: 5.
Book 2 - Name: To Kill a Mockingbird, Available Copies: 3.

// TODO: Create 2 members with the following properties
Member 1 - Name: John Doe
Member 2 - Name: Jane Smith

// TODO: Apply Borrow book method to each member

// TODO: Print Available Copies with their names:
*/