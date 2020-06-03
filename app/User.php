<?php

namespace App\Data;


class User{

    private $id;
    private $login;
    private $password;


    public function __construct( $login = '', $password='' ,$id = 0)
    {
        $this->id = $id;
        $this->login = $login;
        $this->password = $password;
    }

    public function __get($propName)
    {
        return $this->{$propName};
    }

    public function __set($propName, $propValue)
    {
        $this->{$propName} = $propValue;
    }

    public function __toString()
    {
        return __CLASS__ . "$this->id, $this->login";
    }


}