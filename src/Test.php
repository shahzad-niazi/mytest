<?php

class Test {

    private int $test;
    
    public function __construct()
    {
        $this->test = 1;

    }

    public function getTest(): int
    {
        return $this->test;

    }

    public function test22(): void
    {
        echo "this is test";
    }

    public function newTest(): int
    {
        return 10;
    }

    public function dtest22(): int
    {
        return 22222;
    }
    
    public function ddff(): int
    {
        return 22222;
    }
}