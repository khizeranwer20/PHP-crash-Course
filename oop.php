
<?php

class student{
    //properties of class
    //public can be accessed fromanywhere
    //can only be accessed from inside the class.
    //protected can only be accessed by class or inheritance classes
    public $name;
    public $email;
    public $password;

    public function __construct($name,$email,$password){
        $this->name=$name;
        $this->email=$email;
        $this->password=$password;
   }

    function setname($name){
      $this->name=$name;
    }

    function getname(){
        return $this->name;
    }
}

    $student1=new student(' khizer','khizer@','11222'); 
    // $student1->name ="muzamil";
// $student1->setname('mohsin');
// var_dump($student1);
    // echo $student1->getname();
echo $student1->email;
?>