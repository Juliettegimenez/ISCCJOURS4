<?php
class Gecko {
    public function __construct ($name = NULL) {
         if ($name)
             echo "Hello $name !\n";
        else
            print "Hello !\n";
     }
}
?>