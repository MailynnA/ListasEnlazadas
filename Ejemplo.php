<?php


class Nodo{
    public $dato;
    public $siguiente;


    public function __construct($dato){
        $this->dato = $dato;
        $this->siguiente = null;
    }
}


class ListaEnlazada{
    public $cabeza;


    public function __construct(){
        $this->cabeza =null;
    }


    public function insertar ($dato){
        $nuevoNodo = new Nodo ($dato);
       
        if ($this->cabeza === null){
            $this->cabeza=$nuevoNodo;
        } else {
            $nodoActual = $this->cabeza;
            while ($nodoActual ->siguiente !== null)
            {
                $nodoActual =$nodoActual ->siguiente;
            }


            $nodoActual->siguiente = $nuevoNodo;


        }
    }


    public function imprimir(){
        $nodoActual=$this->cabeza;


        while ($nodoActual!==null){
            echo $nodoActual->dato." -> ";
            $nodoActual=$nodoActual->siguiente;
        }


        echo "NULL\n";
    }
}


$lista=new listaEnlazada();


$lista->insertar("Kpop");
$lista->insertar("Pop");
$lista->insertar("Rock");
$lista->imprimir();


?>


El código implementa una lista enlazada en PHP, donde cada nodo contiene un dato y una referencia al siguiente nodo. 
La clase ListaEnlazada tiene métodos para insertar nodos al final de la lista e imprimirla en secuencia. 
Al insertar los valores "Kpop", "Pop" y "Rock", la lista muestra los elementos como Kpop -> Pop -> Rock -> NULL