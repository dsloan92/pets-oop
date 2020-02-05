<?php

class Pet
{
    private $_name;
    private $_color;

    //Default Constructor

    function __construct()
    {
        $this->_name = "unknown";
        $this->_color = "?";
    }

    function eat()
    {
        echo $this->_name . " is eating.<br>";
    }

    function talk()
    {
        echo "Pet is talking<br>";
    }
}
