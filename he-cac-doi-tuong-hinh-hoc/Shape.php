<?php

class Shape
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function show(){
        return "I'm a shape. My name's $this->name";
    }
}