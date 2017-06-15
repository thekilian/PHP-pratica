<!--
Purchased Item
http://www.programmr.com/practice/phpcourse_sandbox_1971/node/2253

Consider a superclass PurchaseItem which models customer’s purchases. This class has:

two private instance variables $name and $unitPrice.
One constructor to initialize the instance variables.
A method getPrice that returns the unitPrice.
Accessor and mutator methods.
A toString method to return the name of the item followed by @ symbol, then the unitPrice.
Consider two subclasses WeightItem and CountItem. 

WeightItem has an additional instance variable $weight in Kg while CountItem has an additional variable $quantity both private.

- Write an appropriate constructor for each of the classes making use of the constructor of the superclass in defining those of the subclasses. 

- Override getPrice method that returns the price of the purchasedItem based on its unit price and weight (WeightItem), or quantity (CountItem).  Make use of getPrice of the superclass

- Override the toString method also for each class making use of the toString method of the superclass in defining those of the subclasses.

Write an application class Challenge where you construct objects from the two subclasses and print them on the screen.

Enter name:Banana
Enter unit price:3.0
Enter weight:1.37
Enter name:Pens
Enter unit price:4.5
Enter count:1
Banana@ 3.0 1.37Kg 4.11 $
Pens@ 4.5 1 units 4.5 $

#PHP
     class PurchaseItem
 {
    private $name;
    private $unitPrice;
    
    function __construct()
    {
        echo "Enter name:";
        $this->name=trim(fgets(STDIN));
        echo "Enter unit price:";
        $this->unitPrice=trim(fgets(STDIN));
    }
    function getPrice()
    {
        return $this->unitPrice;
    }
    function getName()
    {
        return $this->name;
    }
    function toString()
    {
        return $this->getName()."@ ".$this->unitPrice;
    }
 }
 //{ Write your code here
 
 
 
 
 
 
 
 
 
 
 
 
 //}

$weight = new WeightItem();
$count= new CountItem();
echo $weight->toString()."</br>";
echo $count->toString();
  exit;
  exit;
-->