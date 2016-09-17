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

abstract class ShapeDecorator implements Shape{
    protected $decoratedShape;
    
    function __construct(Shape $decoratedShape) {
        
        $this->decoratedShape = $decoratedShape;
    }
            function draw() {
                $this->decoratedShape ->draw();
        
    }
}

class RedShapeDecorator extends ShapeDecorator {
    
    function __construct(Shape $decoratedShape) {
        
        parent::__construct($decoratedShape);
    }
    
    private function setRedBorder(){
        echo 'border color red';
    }
    
    function draw() {
               
                $this->setRedBorder();
                $this->decoratedShape ->draw();
        
    }
}

//$c = new Circle();
$rs = new RedShapeDecorator($c);


$rs = new RedShapeDecorator(new Circle());
