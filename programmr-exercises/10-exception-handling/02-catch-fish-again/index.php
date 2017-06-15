<!--
Catch the fish again...
http://www.programmr.com/practice/phpcourse_sandbox_1971/node/2269

We generally use inheritance along with exceptions to create an exception superclass and various exception subclasses. 

Given the classes ExceptionA, ExceptionB, and ExceptionC.
ExceptionA is the super class of ExceptionB.
ExceptionC is the subclass of ExceptionB.

Write the code to demonstrate that the catch specifying superclass ExceptionA, also catches subclass ExceptionB's exceptions too.

#PHP
    class ExceptionA extends Exception {}

    class ExceptionB extends ExceptionA {}

    class ExceptionC extends ExceptionB {}

 try
    {
        throw new ExceptionB();
    }
     //{Write down your logic here
    
    
    
    
     //} 
  exit;
-->