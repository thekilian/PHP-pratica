<!--
Finding Prime Numbers
http://www.programmr.com/practice/phpcourse_sandbox_1971/node/2157

Create  a function like so:

 isPrime(  $n )

The function should return the value true or 1 if n is a prime and false or 0 otherwise.

Remember that a number is prime if is isn't evenly divisible by anything except for 1 and itself. You can figure this out by using a for loop inside the function.

Make the for loop run through all the numbers from 2 up to n. Inside the loop, use an if statement that determines if n is evenly divisible by your loop control variable.

If you find any number which divides it evenly, you can go ahead and return false from the function without finishing the loop.

If the loop finishes and doesn't find any numbers which divide it, then return true from the function.

You have to print out all the numbers from 2 to 20, and mark each prime number with a "<".

2 <
3 <
4
5 <
6
7 <
8
9
10
11 <
12
13 <
14
15
16
17 <
18
19 <
20

#PHP
   for($j=2;$j<=20;$j++)
   {
       if(isPrime($j)==0)
          {
              echo "$j ";
              echo "<";
              echo "<br>";
          }

       else 
       echo "$j<br>";
       
   }
    //write down your logic here

    
    
    
    
    
    
    
    
    //
-->