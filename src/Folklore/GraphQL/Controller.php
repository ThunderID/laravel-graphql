<?php namespace Folklore\GraphQL;

use Illuminate\Routing\Controller as LaravelController;
use Laravel\Lumen\Routing\Controller as LumenController;

if (class_exists('Laravel\Lumen\Routing\Controller')) {
    
    class Controller extends LumenController
    {
        
    }
    
} elseif (class_exists('Illuminate\Routing\Controller')) {
    
    class Controller extends LaravelController
    {
        
    }
    
} else {
    
    class Controller
    {
        
    }
    
}
