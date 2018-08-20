<?php
// this file is to test applying a git patch from github to gitlab using their respective APIs

use Rafiq\Fake\Namespace;
use Another\Fake\Namespace;

class TestFile extends Nothing
{
    protected $properties = ['Rafiq', 'Booj'];

    function __construct()
    {
        echo "Hello World";
    }
    
    function foo(Bar $bar)
    {
        var_dump($bar);
    }
}
