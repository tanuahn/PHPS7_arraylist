<?php

class ArrayList
{
    public $arrayList;

    public function __construct($arr = "")
    {
        if (is_array($arr) == true) {
            $this->arrayList = $arr;
        }
        else {
            $this->arrayList = array();
        }
    }
    public function add($obj)
    {
        array_push($this->arrayList, $obj);
    }
    public function size()
    {
        return count($this->arrayList);
    }
    public function get($index)
    {
        if ($this->isInteger($index) && $index < $this->size())
        {
            return $this->arrayList[$index];
        } else
            {
            die ("ERROR in ArrayList.get");
            }
    }

    public function isInteger($index)
    {
        return preg_match("/^[0-9]+$/", $index);
    }
}