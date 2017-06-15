<!--
Student and faculty
http://www.programmr.com/practice/phpcourse_sandbox_1971/node/2259

A class Person

It has three data members - name, age, gender.
It has getter methods for all three data members.
It has a constructor which assigns values to these data members.
Now create two classes, Student and Faculty, which inherits Person class.

Student has marks and faculty has salary as their data member.
Both class has their getter method for its data members.
Both has a constructor which assigns values to data member.
Both has a method called display() which shows all stored informations.
Enter Option:
1.Student 2.Faculty:1
Enter Name:Rahul
Enter Age:20
Enter Gender:Male
Enter Marks:88
Student Information:
Rahul
20
Male
88

Enter Option:
1.Student 2.Faculty:2
Enter Name:Anurag Bhandari
Enter Age:40
Enter Gender:Male
Enter Salary:50000
Faculty Information:
Anurag Bhandari
40
Male
50000

#PHP
   class person
{
    private $name;
    private $age;
    private $gender;
    
    function getName()
    {
        return $this->name;
    }
    
    function getAge()
    {
        return $this->age;
    }
    
    function getGender()
    {
        return $this->gender;
    }
    
    function __construct()
    {
        echo "Enter Name:";
        $this->name=trim(fgets(STDIN));
        echo "Enter Age:";
        $this->age=trim(fgets(STDIN));
        echo "Enter Gender:";
        $this->gender=trim(fgets(STDIN));
    }
}
//{Write your code here













//}

echo "Enter Option:</br>";
echo "1.Student 2.Faculty:";
$opt=trim(fgets(STDIN));
switch($opt)
{
    case 1: $stud= new student();$stud->display();break;
    case 2: $fac=new faculty();$fac->display();break;
    default: echo "Invalid Option";
}
  exit;
-->