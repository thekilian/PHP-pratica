<!--
Dog behaviour
http://www.programmr.com/practice/phpcourse_sandbox_1971/node/2257

Write a class DOG which is a subclass of class Animal. The program must display its corresponding actions like below:

Animal constructor
Dog constructor
Animal talk
Dog song
Animal says Hello
Animal constructor
Dog constructor
Dog talk
Dog song
Animal says Hello

#PHP
    class Animal {
   function __construct() {
       print "Animal constructor\n";
   }
   public function animaltalk(){
       print "Animal talk\n";
   }
   public function hello(){
       print "Animal says Hello\n";
   }
   
}
//{Write down your logic here







  //}     
     
     
    $dog1 = new Dog;
    $dog1->animaltalk();
    $dog1->song();
    $dog1->hello();
    $dog2 = new Dog;
    $dog2->dogtalk();
    $dog2->song();
    $dog2->hello();
    
    exit;
-->