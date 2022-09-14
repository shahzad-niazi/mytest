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
}