<?php  
class Book {
    // TODO: Add properties as Private
    private $title;
    private $availableCopies;

    
    public function __construct($title, $availableCopies=0) {
        // TODO: Initialize properties
        $this->title = $title;
        $this->availableCopies = $availableCopies;

        }
   
   
   // TODO: Add getTitle method
   public function getTitle(){
       return $this->title;

   }
   
   // TODO: Add getAvailableCopies method
   public function getAvailableCopies(){
     
       return $this->availableCopies;
   }
   
    // TODO: Add borrowBook method
    public function borrowBook(){
        $this->availableCopies--;
        if($this->availableCopies > 0){
            $this->availableCopies--;
    }
   
}
   
    // TODO: Add returnBook method
    public function returnBook(){
        $this->availableCopies++;
    }
    
   }
   
   $book1 =new Book("Name: The Great Gatsby, Available Copies:",5);
   $book1->borrowBook(1);
   $book1->returnBook();
   echo "Available Copies of 'The Great Gatsby':".$book1->getAvailableCopies();
    echo PHP_EOL;

   $book2 =new Book("Name: To Kill a Mockingbird, Available Copies:",3);
   $book2->borrowBook(2);
   $book2->returnBook();
   echo "Available Copies of 'To Kill a Mockingbird':".$book2->getAvailableCopies();
    echo PHP_EOL;
   
   class Member {
    // TODO: Add properties as Private
    private $name;

   
    public function __construct($name) {
         // TODO: Initialize properties
         $this->name = $name;
        }
   
   
   
    // TODO: Add getName method
    public function getName(){
        return $this->name;
    }
    
    // TODO: Add borrowBook method
    public function borrowBook(){
        $this->name = "Member Name: " . $this->name;
    }
    
   
   
   
    // TODO: Add returnBook method
    public function returnBook(){
        $this->name = "Member Name: " . $this->name;
    }
    
   }
   
   $Member1 =new Member("Name: John Doe");
   $Member2 =new Member("Name: Jane Smith");
   $Member1->borrowBook();
   $Member2->borrowBook();

