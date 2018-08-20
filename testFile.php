<?php
// this file is to test applying a git patch from github to gitlab using their respective APIs

use Rafiq\Faked\Namespace;
use Another\Fake\Namespace;

class TestFile
{
    protected $properties = ['Rafiq', 'Booj', 'Remax'];

    function __construct()
    {
        echo "Hello World!";
    }
    
    function foo(Bar $bar)
    {
        var_dump($bar);
    }
    
    function another()
    {
        // just seeing if it picks up another function
    }
}
