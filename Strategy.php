<?php
interface Strategy{
    function doOperation($n1, $n2);
}
class Add implements Strategy {
    function doOperation($n1, $n2){
        
        return $n1 + $n2;
    }
}

class Multiply implements Strategy {
    function doOperation($n1, $n2){
        
         return $n1*$n2;
    }
}

class Subtract implements Strategy {
    function doOperation($n1, $n2){
        
         return $n1-$n2;
    }
}

class Context {
    private $s;
    
    function __construct($oper) {
        
        switch ($oper){
         case "+" : $this->s = new Add();     break;
         case "-" : $this->s = new Subtract(); break;
         case "*" : $this->s = new Multiply(); break;
         default: throw new Exception('Wrong type!');
        }
    }
    
    function execute($n1, $n2) {
        return $this->s ->doOperation($n1, $n2);
    }
}
$c = new Context("*");
print_r ($c-> execute(2, 4));
