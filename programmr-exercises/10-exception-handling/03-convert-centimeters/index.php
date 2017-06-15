<!--
Convert to centimeters
http://www.programmr.com/practice/phpcourse_sandbox_1971/node/2266

Write a code to convert the height entered by the user in foot and inches to centimeters. Handle the exceptions when negative values or decimal, non-numeric values are given as input.

Enter height in feet-
-4
and in inches-
4
Please enter positive values only.
Enter height in feet-
4
and in inches-
4
Result-131.84 cm

Enter height in feet-
@1
and in inches-
4
You must enter integers. Please try again.
Enter height in feet-
3
and in inches-
4.3
You must enter integers. Please try again.
Enter height in feet-
3
and in inches-
4
Result-101.36 cm

#PHP
    function convert_to_centimeter()
    {
        
        do{
            echo "Enter height in feet-\n";
            $feet_str=trim(fgets(STDIN));
            echo "and in inches-\n";
            $inch_str=trim(fgets(STDIN));
            //Write your code here
            
            
            
            
            
            
            
            //}
        }while(true);
    }
    
echo "Result-".convert_to_centimeter()." cm";
  exit;
-->