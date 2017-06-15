<!--
Student Percentage
http://www.programmr.com/practice/phpcourse_sandbox_1971/node/2245

A class student has three data members: name, roll, marks of 5 subjects and member functions to input name, roll no and marks, and display Percentage.
The class student and the member functions are defined.
Declare an object of the class and ask user for name, roll no and marks in 5 subjects. Finally, display the name of the student, his roll number and percentage.

Enter Name:Rahul
Enter Roll number:12
Enter Marks in 5 subjects:90
89
78
67
89
Name-Rahul
Roll number-12
Percentage-82.6


Enter Name:Anuj
Enter Roll number:5
Enter Marks in 5 subjects:92
91
93
95
94
Name-Anuj
Roll number-5
Percentage-93

#PHP
class student  
{  
    public $name = "Rahul";  
    public $roll = 1;
    public $marks = array();
    //set functions    
    public function setname($name)  
    {  
        $this->name = $name;  
    }
    public function setroll($roll)  
    {  
        $this->roll = $roll;  
    }
    public function setmarks($marks){
         if (is_array($marks)) {
            $this->marks = $marks;
        }
    }
    //get functions
    public function getname()  
    {  
        return $this->name ;  
    }  
    
    public function getroll()  
    {  
        return $this->roll;  
    }  
    public function getmarks()  
    {  
        return $this->marks;  
    }  
    //other functions
    public function percentage(){
        $sum=0;
        for($i=0;$i<5;$i++){$sum=$sum+ $this->marks[$i];}     
        return $sum*100/500;
    }
    
}  
    
   echo "Enter Name:";
   $name = trim(fgets(STDIN));
   echo "Enter Roll number:";
   $roll = trim(fgets(STDIN));
   echo "Enter Marks in 5 subjects:";
   for($i=0;$i<5;$i++){$marks[$i] = trim(fgets(STDIN));}
  //{Write down your logic here
    
    
    
    
    
    
    
    
    //} 
    exit;
-->