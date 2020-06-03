<?php

namespace App\Data;


class Todo
{
    private $id;
    private $title;
    private $done;
    private $dueDate;


    public function __construct($id = 0, $title = '', $done = false, $dueDate = 0)
    {
        $this->id = $id;
        $this->title = $title;
        $this->done = $done;
        $this->dueDate = $dueDate;
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
        return __CLASS__ . "$this->id, $this->title, $this->done, $this->dueDate";
    }
}
