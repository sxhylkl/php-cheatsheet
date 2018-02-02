<?php
// PART 20 - OOP
    class Person{
        private $name;
        private $email;
        private static $ageLimit = 40;

        public function __construct($name, $email) {
            $this->name = $name;
            $this->email = $email;
            echo __CLASS__.' created!<br>';
        }

        public function __destruct(){
            echo __CLASS__.' destroyed!<br>';
        }

        public function setName($name) {
            $this->name = $name;
        }
        public function getName() {
            return $this->name.'<br>';
        }

        public function setEmail($name) {
            $this->email = $email;
        }
        public function getEmail() {
            return $this->email.'<br>';
        }

        public static function getAgeLimit() {
            return self::$ageLimit;
        }
    }
    #Static props and method
    echo Person::$ageLimit; //Accessing Static Variable
    echo Person::getAgeLimit(); //Accessing Static Method

    //$person1 = new Person('John Doe', 'john@gmail.com');
    //$person1->setName('John Doe');
    //$person1->name = 'John Doe';

    //echo $person1->name;
   // echo $person1->getName();

   class Customer extends Person {
       private $balance;

       public function __construct($name, $email, $balance) {
            parent::__construct($name, $email); //accessing parent
            echo 'A new '.__CLASS__,' has been created!<br>';
            $this->balance = $balance;
       }

       public function setBalance($balance) {
        $this->email = $email;
        }
        public function getBalance() {
            return $this->balance.'<br>';
        }
   }

   //$customer1 = new Customer('John Doe', 'jdoe@gmail.com', 300);
   //echo $customer1->getBalance();
?>