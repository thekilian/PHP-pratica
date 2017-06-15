<!--
Software and Book
http://www.programmr.com/practice/phpcourse_sandbox_1971/node/2258

A class for a Product is defined.

Each Product has two data member which holds name and net price of product.
A constructor which sets these data members.
Each Product has method getName() and getPrice() to return stored name and price.
Write 2 classes which inherits Product class, of type Software and Book

Both class has method getGrossPrice() which uses parent getPrice() for calculation.
Gross Price of Software is NetPrice + 21% VAT
Gross Price of Book is NetPrice + 12% VAT
Enter Option:
1.Book 2.Software:1
Enter Name:ASD
Enter net price:100
Book name-ASD
Actual Price-100
After tax addition-112

Enter Option:
1.Book 2.Software:2
Enter Name:CCVI
Enter net price:5000
Software name-CCVI
Actual Price-5000
After tax addition-6050

#PHP
   class product
{
    private $netprice;
    private $name;
    
    function __construct()
    {
        echo "Enter Name:";
        $this->name=trim(fgets(STDIN));
        echo "Enter net price:";
        $this->netprice=trim(fgets(STDIN));
    }
    
    function getName()
    {
        return $this->name;
    }
    
    function getPrice()
    {
        return $this->netprice;
    }
}
//{Write your code here







//}

echo "Enter Option:</br>";
echo "1.Book 2.Software:";
$opt=trim(fgets(STDIN));
switch($opt)
{
    case 1: $book = new book(); echo"Book name-".$book->getName()."</br>"."Actual Price-".$book->getPrice()."</br>"."After tax addition-".$book->getGrossPrice();break;
    case 2: $soft = new software(); echo"Software name-".$soft->getName()."</br>"."Actual Price-".$soft->getPrice()."</br>"."After tax addition-".$soft->getGrossPrice();break;
    default: echo "Invalid Option";
}
  exit;
-->