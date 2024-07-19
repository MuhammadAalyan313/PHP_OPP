<?php


// =================================== Constructor | Destructor & Inheritance ================================ //

// class class1{
    
    // This is access modifier
    // protected $x = 10;
    
    // This is constructor  its called automatically at the start of the object/class
    // function __construct(){
    //     echo "class 1 constructor called";
    // }

    // This is the normal function
    // function fun1(){
    //     echo $this->x;
    // }

    // This is constructor  its called automatically at the end of the object/class
//     function __destruct(){
//         echo "class 1 destructor called";
//     }
// }
// class class2 extends class1{
//     function __construct(){
        // parent::__construct();
    //     echo "class 2 constructor called";
    // }
    // function fun2(){
    //     echo $this->x = 7;
    // }
    // function __destruct(){
    //     echo "class 2 destructor called";
    // }
// }

// Making the object of the class
// $obj = new class2();

// Call the function using the object
// $obj->fun2();

// Call the x value using the function
// echo $obj->x;


// ================================= Abstraction ======================================= //

// abstract class class1{
//     abstract function test();

     
// }
// class class2 extends class1{
//     function test(){
//         echo "child test";
//     }
// }
// class class3 extends class2{
//     function test(){
//         echo 'class3 test';
//     }
// }



// ================================== Interface ========================================= //



// interface class1{
//    public function test();

// }

// interface class3{
// public function test2();
// }
// class class2 implements class1, class3{
//     function test(){
//         echo 'hello';
//     }
//     function test2(){
//         echo "test2";
//     }
// }

 


// =============================== Static Member ======================================= //


// class class1{
//     static public $num = 10;
//     static function test(){
//         echo self::$num;
//     }
// } 

// class1::test();


// ============================== Polymorphism ================================ //
// Using Abstraction

// abstract class class1{
//     abstract function fun1();
// }

// class class2 extends class1{
//     function fun1(){
//         echo "Class 2 function called";
//     }
// }
// class class3 extends class2{
//     function fun1(){
//         echo "Class 3 function called";
//     }
// }

// Using Interface

// Interface class1{
//     function fun1();
// }
// Interface class2{
//     function fun2();
// }

// class class3 implements class1,class2{
//     function fun1(){
//         echo "Class 1 function 1 called";
//     }
//     function fun2(){
//         echo "Class 2 function 2 called";
//     }
// }

 

// ============================== Traits ======================================== //

// trait trait1{
//     function fun1(){
//         echo "Function 1";
//     }
// }
// trait trait2{
//     function fun2(){
//         echo "function 2";
//     }
// }

// class class1{
//     use trait1, trait2;
//     function fun2(){
//         echo "Class function 1";
//     }
// }



?>