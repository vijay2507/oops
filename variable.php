<?php
class singer{
    public $name;
    public $voice;

   function singername($name,$voice){
       echo  $this->name=$name;
       echo '<br>';
       echo  $this->voice=$voice;
    }
}

$name =new singer;
 $name->singername('mukesh','poor');

?>