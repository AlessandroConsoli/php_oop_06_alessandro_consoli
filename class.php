<?php
abstract class Categoria {
    public $tipo;

    public function __construct($_tipo){
        return $this->tipo = $_tipo;
    }

    abstract public function getMyCategory();
}


class Attualità extends Categoria{

    public function getMyCategory(){
        return $this->tipo;
    }

}


class Sport extends Categoria{

    public function getMyCategory(){
        return $this->tipo;
    }

}


class Gossip extends Categoria{

    public function getMyCategory(){
        return $this->tipo;
    }

}


class Storia extends Categoria{

    public function getMyCategory(){
        return $this->tipo;
    }

}











// $class1 = new Attualità("Attualità \n");
// var_dump($class1);
// $class1->getMyCategory();

// $class2 = new Sport("Sport \n");
// $class2->getMyCategory();

// $class3 = new Gossip("Gossip \n");
// $class3->getMyCategory();

// $class4 = new Storia("Storia \n");
// $class4->getMyCategory();



?>