
<?php
 class employeedetail{
 public $name;
 public $salary;
 public $age;

//    constructer function
function __construct($name,$salary,$age){
    $this->name=$name;
    $this->salary=$salary;
    $this->age=$age;
    $this->employee();
}

protected function employee(){
    echo"name of the employee $this->name <br>";
    echo"salary of the employee $this->salary <br>";
    echo"age of the employee $this->age <br>";
}
 }
$detail= new employeedetail('sethi','150 rupiya dega ',19);
?>