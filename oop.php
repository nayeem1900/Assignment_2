<?php
class Book {
    private $title;
    private $availableCopies;

    public function __construct($title, $availableCopies) {
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getAvailableCopies() {
        return $this->availableCopies;
    }

    public function borrowBook() {
        if ($this->availableCopies > 0) {
            $this->availableCopies--;
            return true;
        } else {
            echo "No available copies of '{$this->title}'\n";
            return false;
        }
    }

    public function returnBook() {
        $this->availableCopies++;
    }
}

class Member {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function borrowBook($book) {
        return $book->borrowBook();
    }

    public function returnBook($book) {
        $book->returnBook();
    }
}

// Create books
$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);

// Create members
$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");

// Member One borrows book 1
if ($member1->borrowBook($book1)) {
    echo "{$member1->getName()} borrowed '{$book1->getTitle()}'\n";
} else {
    echo "{$member1->getName()} could not borrow '{$book1->getTitle()}'\n";
}

// Member Two borrows book 2
if ($member2->borrowBook($book2)) {
    echo "{$member2->getName()} borrowed '{$book2->getTitle()}'\n";
} else {
    echo "{$member2->getName()} could not borrow '{$book2->getTitle()}'\n";
}

// Print available copies with their names
echo "Available Copies:\n";
echo "{$book1->getTitle()}: {$book1->getAvailableCopies()}\n";
echo "{$book2->getTitle()}: {$book2->getAvailableCopies()}\n";
