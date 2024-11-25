<?php
abstract class Categoria {
    public $tipo;

    public function __construct($_tipo){
        $this->tipo = $_tipo;
    }

    abstract public function getMyCategory();
}


class Attualità extends Categoria{

    public function getMyCategory(){
        echo $this->tipo;
    }

}


class Sport extends Categoria{

    public function getMyCategory(){
        echo $this->tipo;
    }

}


class Gossip extends Categoria{

    public function getMyCategory(){
        echo $this->tipo;
    }

}


class Storia extends Categoria{

    public function getMyCategory(){
        echo $this->tipo;
    }

}


class Post{
    public $titolo;
    public $categoria;
    public $tag;

    public function __construct($_titolo, Categoria $_categoria, $_tag){
        $this->titolo = $_titolo;
        $this->categoria = $_categoria;
        $this->tag = $_tag;
    }

    public function printArticle(){
        echo $this->titolo . "\n" . $this->categoria->getMyCategory() . $this->tag . "\n" . "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Excepturi sapiente iste fugit expedita maiores reiciendis ipsam voluptate, magnam debitis corporis doloremque cum repudiandae id dolores nisi distinctio, molestiae quibusdam voluptas!";
    }
}


$post1 = new Post("Clima impazzito a causa dei cambiamenti climatici", new Attualità("Attualità"), "La nostra inchiesta: ");
$post1->printArticle();








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