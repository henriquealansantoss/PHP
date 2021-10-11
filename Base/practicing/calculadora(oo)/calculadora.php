<?php

class calculadora
{
    public float $num = 0;

    public function add($n)
    {
        $this->num += $n;
    }

    public function sub($n)
    {
        $this->num -= $n;
    }

    public function multplic($n)
    {
        $this->num *= $n;
    }

    public function div($n)
    {
        $this->num /= $n;
    }

    public function total()
    {
        return $this->num;
    }

    public function clear()
    {
        $this->num = 0;
    }
}
