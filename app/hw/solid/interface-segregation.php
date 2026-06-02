<?php
interface eatBird
{
    public function eat();
}

interface flyBird
{
    public function fly();
}

class Swallow implements eatBird, flyBird
{
    public function eat() {}
    public function fly() {}
}

class Ostrich implements eatBird, flyBird
{
    public function eat() {}
    public function fly() { /* exception */ }
}