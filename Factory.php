<?php
interface Shape {
    function draw();
}

class Rectangle implements Shape {
    public function draw(){
        echo __METHOD__.'<br/>' ;
    }
}

class Circle implements Shape {
    public function draw(){
        echo __METHOD__.'<br/>' ;
    }
}

class Square implements Shape {
    public function draw(){
        echo __METHOD__.'<br/>' ;
    }
}

class ShapeFactory {
     
    function getShape($type){
        $type = strtoupper($type);
        switch ($type){
         case "R" : return new Rectangle(); 
         case "S" : return new Square(); 
         case "C" : return new Circle(); 
         default: throw new Exception('Wrong type!');
        }
    }
}

$f = new ShapeFactory();
$r = $f->getShape('R');
$s = $f->getShape('S');
$c = $f->getShape('C');
$r->draw();
$s->draw();
$c->draw();