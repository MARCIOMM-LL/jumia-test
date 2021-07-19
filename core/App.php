<?php

namespace App\Core;

class App
{
    protected static $bindings;

    public static function bind($key, $value)
    {
        static::$bindings[$key] = $value;
    }

    public static function get($key)
    {
        if (! array_key_exists($key, static::$bindings)) {
            
            throw new \Exception("No {$key} bound in the container");
        }
        
        return static::$bindings[$key];
    }
}