<?php

class ObjectIterator implements Iterator
{

    private $obj;
    private $count;
    private $currentIndex;

    function __construct($obj) {
        $this->obj = $obj;
        $this->count = count($this->obj->data);
    }

    function rewind() {
        $this->currentIndex = 0;
    }

    function valid() {
        return $this->currentIndex < $this->count;
    }

    function key () {
        return $this->currentIndex;
    }

    function current() {
        return $this->obj->data[$this->currentIndex];
    }

    function next(){
        $this->currentIndex++;
    }
}

class Object implements IteratorAggregate
{
    public $data = array();

    function __construct($in) {
        $this->data = $in;
    }

    function getIterator() {
        return new ObjectIterator($this);
    }
}

$my_object = new Object([2, 4, 6, 8, 10]);
$my_iterator = $my_object->getIterator();

for ($my_iterator->rewind(); $my_iterator->valid(); $my_iterator->next()) {
    $key = $my_iterator->key();
    $value = $my_iterator->current();
    echo $key." => ".$value."<br />";
}

?>
