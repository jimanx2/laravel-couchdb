<?php namespace Robsonvn\CouchDB\Compatibility;

class Util {
    public static function starts_with(...$args)
    {
        if(function_exists("starts_with"))
        {
            return call_user_func_array( "starts_with", $args );
        }
        return call_user_func_array( "Str::startsWith", $args );
    }

    public static function ends_with(...$args)
    {
        if(function_exists("ends_with"))
        {
            return call_user_func_array( "ends_with", $args );
        }
        return call_user_func_array( "Str::endsWith", $args );
    }
}