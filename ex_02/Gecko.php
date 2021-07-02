<?php
class Gecko {
    public $name;
    public function __construct ($name = null) {
        $this->name = $name;
         if ($name)
             echo "Hello $name !\n";
        else
            print "Hello !\n";
     }
}
$thomas = new Gecko("Thomas");
$annonymus = new Gecko();
?>