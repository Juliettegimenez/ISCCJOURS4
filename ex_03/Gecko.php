<?php
class Gecko {
    private $name;

    public function __construct ($geckoName = null) {
        $this->name = $geckoName;
         if ($this->name)
             echo "Hello $geckoName !\n";
        else
            echo "Hello !\n";
     }

     public function __destruct (){
         if ($this->name)
            echo "Bye $this->name !\n";
         else
            echo "Bye !/n";
}
public function getName (){
    return $this->name;
    }
}
?>