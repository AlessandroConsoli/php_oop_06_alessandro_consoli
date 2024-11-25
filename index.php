<?php

require_once('class.php');

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
        echo $this->titolo . "\n" . $this->categoria->getMyCategory() . "\n" .  $this->tag . "\n" . "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Excepturi sapiente iste fugit expedita maiores reiciendis ipsam voluptate, magnam debitis corporis doloremque cum repudiandae id dolores nisi distinctio, molestiae quibusdam voluptas!";
    }
}


$post1 = new Post("Clima impazzito a causa dei cambiamenti climatici", new Attualità("Attualità"), "La nostra inchiesta: ");
$post1->printArticle();

?>