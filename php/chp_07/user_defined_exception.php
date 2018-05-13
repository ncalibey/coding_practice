<?php

class MyException extends Exception
{
    function __toString() {
        return "<strong>Exception ".$this->getCode()."</strong>: "
        .$this->getMessage()."<br /> in ".$this->getFile()." on line"
        .$this->getLine()."<br />";
    }
}

try {
    throw new MyException("What a terrible night for an error...", 42);
} catch (MyException $m) {
    echo $m;
}
