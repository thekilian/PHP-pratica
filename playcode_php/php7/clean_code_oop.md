# Creating clean code with OOP - Leraning PHP7

# Part 7
## Properties and methods visibility
- private: This type allow access only to members of the same class. If A and B are isntances of the class C, A can access the properties and methods of B.
- protected: This type allows access to members of the same class and instances from classes that inherites 


# Part 5
## As the constructor is still a function, it can use default arguments. Imagine that the number of units will usually be 0 when creating the object, and later, the librarian will add units when available. We could set a default value to the $available argument of the constructor, so if we do not send the number of units when creating the object, the object will be instantiated with its default value:

'''
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
    # We could use the preceding constructor in two different ways:
        // $book1 = new Book("1984", "George Orwell", 9785267006323, 12);
        // $book2 = new Book("1984", "George Orwell", 9785267006323);
        
        // var_dump($book1, $book2);
        # $book1 will set the number of units available to 12, whereas $book2 will set it to the default value of 0.
'''   
 
        
# Part 4
## Constructors are functions that are invoked when someone creates a new instance of the class

'''
    public function __construct(int $isbn, string $title, string $author, int $available) {
        $this->isbn = $isbn;
        $this->title = $title;
        $this->author = $author;
        $this->available = $available;
    }
    
    # The construct takes four arguments, and then assigns the value of one of the arguments to each of the properties of the instance:
    //$book = new Book("1984", "George Orwell", 9785267006323, 12);
    
    # This object is exactly the same as the object when we swt the value to each of its properties manually. But this one looks cleaner, right? This not mean you cannot set new values to this object manually, it just helps you in constructing new objects.
'''

# Part 3

'''
    public $isbn;
    public $title;
    public $author;
    public $available;

    public function getPrintableTitle(): string {
        $result = '<i>'.$this->title.'</i> - '.$this->author;
        if(!$this->available) {
            $result .= ' <b>Not available</b>';
        }
        return $result;
    }

    public function getCopy(): bool {
        if($this->available < 1) {
            return false;
        } else {
            $this->available--;
            return true;
        }
    }
'''

# Part 1

'''
class Customer {

}

$book = new Book();

$book->title = "1984";
$book->author = "George Orwell";
$book->available = true;
var_dump($book);

$book1 = new Book();
$book1->title = "The Hunger Games - Mockinjay";

$book2 = new Book();
$book2->title = "To kill a Mockinbird";
var_dump($book1, $book2);

$customer = new Customer();
'''

# Part 2

'''
$book = new Book();

$book->title = "1984";
$book->author = "George Orwell";
$book->isbn = 9785267006323;
$book->available = 12;

if($book->getCopy()) {
    echo 'Here, your copy.';
    echo '<br>';
    echo 'Copies available: '.$book->available;
} else {
    echo 'I am afraid that book is not available.';
}
'''