<!--
LongestSortedSequence
http://www.programmr.com/practice/phpcourse_sandbox_1971/node/2164

Write a method named longestSortedSequence that accepts an array of integers as a parameter and that returns the length of the longest sorted (nondecreasing) sequence of integers in the array. For example, if a variable named $arr stores the following values:

$arr = Array(3, 8, 10, 1, 9, 14, -3, 0, 14, 207, 56, 98, 12);

then the call of longestSortedSequence($array) should return 4 because the longest sorted sequence in the array has four values in it (the sequence -3, 0, 14, 207). Notice that sorted means nondecreasing, which means that the sequence could contain duplicates. For example, if the array stores the following values:

$arr = Array(17, 42, 3, 5, 5, 5, 8, 2, 4, 6, 1, 19)

Then the method would return 5 for the length of the longest sequence (the sequence 3, 5, 5, 5, 8). Your method should return 0 if passed an empty array.

Enter No of elements:6
Enter elements:1
2
3
2
1
7
Longest Sequence:3

#PHP
    function longestSortedSequence($arr)
 {
    //{Write your code here
    
    
    
    
    
    
    //}
 }
 
 echo "Enter No of elements:";
 $count=trim(fgets(STDIN)); 
 $arr = Array();
 echo "Enter elements:";
 for($i=0;$i<$count;$i++)
 {
    $arr[$i]=trim(fgets(STDIN)); 
 }
 echo "Longest Sequence:";
 echo longestSortedSequence($arr);
  exit;
-->