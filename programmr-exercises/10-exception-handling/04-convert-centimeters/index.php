<!--
Converting to centimeters
http://www.programmr.com/practice/phpcourse_sandbox_1971/node/2271

Write a code to convert the height entered by the user in foot and inches to centimeters. Handle the exceptions when negative values or decimal, non-numeric values are given as input:

Enter height in feet:-4.3
and in inches:4
Please enter positive values only.
Enter height in feet:4
and in inches:-4.3
Please enter positive values only.
Enter height in feet:4
and in inches:4.3
Enter integer value only. Try again.
Enter height in feet:4
and in inches:4
Result:132.08 cm


Enter height in feet:@1
and in inches:3
Enter integer value only. Try again.
Enter height in feet:3
and in inches:4.3
Enter integer value only. Try again.
Enter height in feet:4
and in inches:4
Result:132.08 cm
Note : take 1 inch = 2.54 cm, for calculations


#PHP
  $continue = false;
  $cm = 0;
  do{
    try
    {
      echo "Enter height in feet:";
      $ft = trim(fgets(STDIN));
      echo "and in inches:";
      $in = trim(fgets(STDIN));
      $cm = height($ft, $in);
      echo "Result:".$cm." cm";
      $continue = false;
    }
     //{Write down your logic here
   
   
   
   
   
   
   
     //} 
  exit;
-->