<?php 
/* --- Object Oriented Programming -- */

/*
  From PHP5 onwards you can write PHP in either a procedural or object oriented way. OOP consists of classes that can hold "properties" and "methods". Objects can be created from classes.
*/
class User {
  // Properties are attributes that belong to a class

  // Access Modifiers: public, private, protected
  // public: can be accessed from outside the class
  // private: can only be accessed from within the class
  // protected: can only be accessed from within the class and any class that inherits from it

  public $name;
  public $email;
  public $password;

  // Constructor: a special method that is called when an object is created from a class
  public function __construct($name, $email, $password) {
    $this->name = $name;
    $this->email = $email;
    $this->password = $password;
  }

  // Methods are functions that belong to a class
  public function set_name($name) {
    $this->name = $name;
  }

  public function get_name() {
    return $this->name;
  }
}

// Create an object from the class
$user = new User('John Doe', 'john@example.com', 'password123');
$user2 = new User('Jane Doe', 'jane@example.com', 'password456');

// Inheritance: a class can inherit from another class
class Employee extends User {
  public $position;

  public function __construct($name, $email, $password, $position) {
    parent::__construct($name, $email, $password);
    $this->position = $position;
  }

  public function get_position() {
    return $this->position;
  }
}

$employee = new Employee('Alice Smith', 'alice@example.com', 'password789', 'Manager');
echo $employee->get_position();
