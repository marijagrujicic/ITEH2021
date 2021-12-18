<?php
class Products{
    private $id;
    private $name;
    private $fabric;
    private $size;
    private $color;
    private $length;
    private $price;
    private $url;
    public function __construct(int $id, string $name, string $fabric, string $size, string $color, string $length, int $price, int $url)
    {
        $this->id=$id;
        $this->name=$name;
        $this->fabric=$fabric;
        $this->size=$size;
        $this->color=$color;
        $this->length=$length; 
        $this->price=$price;
        $this->url=$url;
    }

    function getId(){
        return $this->id;
    }
    function getName(){
        return $this->name;
    }
    function getFabric(){
        return $this->fabric;
    }
    function getSize(){
        return $this->size;
    }
    function getColor(){
        return $this->color;
    }
    function getLength(){
        return $this->length;
    }
    function getPrice(){
        return $this->price;
    }
    function getUrl(){
        return $this->url;
    }
}
