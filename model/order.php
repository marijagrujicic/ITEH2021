<?php
class Order{
    private $user;
    private $dress;
    private $date;
    public function __construct(string $user, string $dress, int $date)
    {
        $this->user=$user;
        $this->dress=$dress;
        $this->date=$date;
    }
    function getUser(){
        return $this->user;
    }
    function getProduct(){
        return $this->dress;
    }
    function getDate(){
        return $this->date;
    }
}
