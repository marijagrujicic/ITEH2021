<?php
class User{
    private $id;
    private $first_name;
    private $last_name;
    private $username;
    private $password;
    private $email;
    private $phoneNumber;
    private $city;
    private $address;
    private $admin;
    public function __construct(int $id,string $first_name, string $last_name, string $username, string $password, string $email, int $phoneNumber, string $city, string $address, int $admin)
    {
        $this->id=$id;
        $this->first_name=$first_name;
        $this->last_name=$last_name;
        $this->username=$username;
        $this->password=$password;
        $this->email=$email;
        $this->phoneNumber=$phoneNumber;
        $this->city=$city;
        $this->address=$address;
        $this->admin=$admin;
    }
    function getId(){
        return $this->id;
    }
    function getFirstName(){
        return $this->first_name;
    }
    function getLastName(){
        return $this->last_name;
    }
    function getUsername(){
        return $this->username;
    }
    function getPassword(){
        return $this->password;
    }
    function getEmail(){
        return $this->email;
    }
    function getPhoneNumber(){
        return $this->phoneNumber;
    }
    function getCity(){
        return $this->city;
    }
    function getAddress(){
        return $this->address;
    }
    public function getAdmin(){
        return $this->admin;
    }
}
